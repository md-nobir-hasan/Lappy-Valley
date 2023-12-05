<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\DisplaySize;
use App\Models\DisplayType;
use App\Models\Graphic;
use App\Models\hdd;
use App\Models\ProcessorGeneration;
use App\Models\ProcessorModel;
use App\Models\Ram;
use App\Models\SpecialFeature;
use App\Models\ssd;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['can:Show Product']);
    }

    public function index()
    {
        $products=Product::with('cat_info', 'sub_cat_info','brand','ProcessorGeneration','ProcessorModel','DisplayType','DisplaySize','Ram','ssd','hdd','Graphic','SpecialFeature')
                            ->latest()->paginate(10);
        // return $products;
        return view('backend.product.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $this->ccan('Create Product');

        $n['brands']=Brand::get();
        $n['p_generations']=ProcessorGeneration::get();
        $n['p_models']=ProcessorModel::get();
        $n['d_sizes']=DisplaySize::get();
        $n['d_types']=DisplayType::get();
        $n['rams']=Ram::get();
        $n['ssds']=ssd::get();
        $n['hdds']=hdd::get();
        $n['graphics']=Graphic::get();
        $n['special_features']=SpecialFeature::get();
        $n['categories']=Category::where('is_parent',1)->get();
        // return $category;
        return view('backend.product.create',$n);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->ccan('Create Product');
        // dd($request->all());
        // return $request->all();
        $this->validate($request,[
            'title'=>'string|required|max:255',
            'model'=>'string|required|max:255',
            'mpn'=>'string|required|max:255',
            'price'=>'required|numeric',
            'discount'=>'nullable|numeric',
            'final_price'=>'nullable|numeric',
            'summary'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'string|required',
            'stock'=>"required|numeric",
            'brand_id'=>'nullable|exists:brands,id',
            'cat_id'=>'required|exists:categories,id',
            'child_cat_id'=>'nullable|exists:categories,id',
            // 'upcomming'=> "sometimes|in:1",
            'is_featured'=>'sometimes|in:1',
            'status'=>'required|in:active,inactive',
            // 'condition'=> 'required|in:default,new,hot',
            'special_feature' => 'nullable',

            //Processore Attributes
            'processor_generation_id' =>'required|exists:processor_generations,id',
            'processor_model_id' =>'required|exists:processor_models,id',
            'p_brand' => 'required|string|max:255',
            'c_speed' => 'required|string|max:255',
            'l1_cache' => 'required|string|max:255',
            'l2_cache' => 'required|string|max:255',
            'l3_cache' => 'required|string|max:255',
            'p_core' => 'nullable|numeric',
            'p_thread' => 'nullable|numeric',

            //display Attributes
            'display_size_id' =>'required|exists:display_sizes,id',
            'display_type_id' =>'required|exists:display_types,id',
            'd_resolution' => 'required|string|max:255',
            'd_other_features' => 'required|string',

            //Memory Attributes
            'ram_id' =>'required|exists:rams,id',
            'm_slot' => 'required|numeric',
            'm_removal' => 'sometimes|in:1',

            //Storage Attributes
            'ssd_id' =>'required|exists:ssds,id',
            'hdd_id' =>'required|exists:hdds,id',
            's_slot' => 'nullable|numeric',
            's_extra_m2_slot' => 'sometimes|in:1',
            's_support_type' => 'nullable|string|max:255',
            's_upgrade' => 'required|string|max:255',

            //Graphic Attributes
            'graphic_id' =>'required|exists:graphics,id',
            'g_model' => 'nullable|string|max:255',

            //Keyboar & Touchpad Attributes
            'k_type' => 'required|string|max:255',
            'touchpad' => 'sometimes|in:1',

            //Camera & Audio Attributes
            'webcam' => 'required|string|max:255',
            'microphone' => 'required|string|max:255',
            'speaker' => 'required|string|max:255',

            //Ports & Slots Attributes
            'optical_drive' => 'nullable|string|max:255',
            'card_reader' => 'nullable|string|max:255',
            'hdmi_p' => 'required|string|max:255',
            'usb2_p' => 'required|string|max:255',
            'usb3_p' => 'required|string|max:255',
            'type_c_tb_p' => 'required|string|max:255',
            'headphone_p' => 'required|string|max:255',
            'microphone_p' => 'required|string|max:255',

            //Network & Connectivity Attributes
            'wifi' => 'required|string|max:255',
            'bluetooth' => 'required|string|max:255',

            //Security Attributes
            'finger_print' => 'nullable|string|max:255',

            //Software Attributes
            'operating_system' => 'required|string|max:255',

            //Power Attributes
            'battery_type' => 'required|string|max:255',
            'battery_capacity' => 'required|string|max:255',
            'adapter_type' => 'required|string|max:255',

            //Physical Specification Attributes
            'color' => 'required|string|max:255',
            'dimension' => 'required|string|max:255',
            'weight' => 'required|string|max:255',

            //Warranty Attributes
            'w_details' => 'nullable|string|max:255',

        ]);
        $data=$request->all();
        // dd($data);
        $special_feature = '';
        foreach($request->special_feature as $sp){
            $special_feature = $special_feature.', '.$sp;
        }
        $data['special_feature'] = $special_feature;
        $slug=Str::slug($request->title);
        $count=Product::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        $data['is_featured']=$request->input('is_featured',0);
        // $size=$request->input('size');
        // if($size){
        //     $data['size']=implode(',',$size);
        // }
        // else{
        //     $data['size']='';
        // }
        // return $size;
        // return $data;
        $status=Product::create($data);
        if($status){
            request()->session()->flash('success','Product Successfully added');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $product = Product::with('cat_info', 'sub_cat_info', 'brand', 'ProcessorGeneration', 'ProcessorModel', 'DisplayType', 'DisplaySize', 'Ram', 'ssd', 'hdd', 'Graphic', 'SpecialFeature')
                    ->find($id);
        // return $products;
        return view('backend.product.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->ccan('Edit Product');

        $brand=Brand::get();
        $product=Product::findOrFail($id);
        $category=Category::where('is_parent',1)->get();
        $items=Product::where('id',$id)->get();
        // return $items;
        return view('backend.product.edit')->with('product',$product)
                    ->with('brands',$brand)
                    ->with('categories',$category)->with('items',$items);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->ccan('Edit Product');

        $product=Product::findOrFail($id);
        $this->validate($request,[
            'title'=>'string|required',
            'summary'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'string|required',
            'size'=>'nullable',
            'stock'=>"required|numeric",
            'cat_id'=>'required|exists:categories,id',
            'child_cat_id'=>'nullable|exists:categories,id',
            'is_featured'=>'sometimes|in:1',
            'brand_id'=>'nullable|exists:brands,id',
            'status'=>'required|in:active,inactive',
            // 'condition'=>'required|in:default,new,hot',
            'price'=>'required|numeric',
            'discount'=>'nullable|numeric',
            'processor_generation_id' => 'required|exists:processor_generations,id',
            'processor_model_id' => 'required|exists:processor_models,id',
            'display_size_id' => 'required|exists:display_sizes,id',
            'display_type_id' => 'required|exists:display_types,id',
            'ram_id' => 'required|exists:rams,id',
            'ssd_id' => 'required|exists:ssds,id',
            'hdd_id' => 'required|exists:hdds,id',
            'graphic_id' => 'required|exists:graphics,id',
            'special_feature_id' => 'required|exists:special_features,id',
        ]);

        $data=$request->all();
        $data['is_featured']=$request->input('is_featured',0);
        $size=$request->input('size');
        if($size){
            $data['size']=implode(',',$size);
        }
        else{
            $data['size']='';
        }
        // return $data;
        $status=$product->fill($data)->save();
        if($status){
            request()->session()->flash('success','Product Successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->ccan('Delete Product');
        $product=Product::findOrFail($id);
        $status=$product->delete();

        if($status){
            request()->session()->flash('success','Product successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting product');
        }
        return redirect()->route('product.index');
    }
}
