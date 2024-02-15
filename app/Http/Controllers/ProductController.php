<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\DisplaySize;
use App\Models\DisplayType;
use App\Models\Duration;
use App\Models\Graphic;
use App\Models\hdd;
use App\Models\Installment;
use App\Models\ProcessorGeneration;
use App\Models\ProcessorModel;
use App\Models\ProductOffer;
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
        $n['products']=Product::with('cat_info', 'sub_cat_info','brand','ProcessorGeneration','ProcessorModel','DisplayType','DisplaySize','Ram','ssd','hdd','Graphic','SpecialFeature')
                            ->latest()->get();
        $n['count'] = Product::get();
        // return $products;
        return view('backend.product.index',$n);
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
        $n['durations']=Duration::where('status',true)->get();
        $n['p_models']=ProcessorModel::get();
        $n['d_sizes']=DisplaySize::get();
        $n['d_types']=DisplayType::get();
        $n['rams']=Ram::get();
        $n['ssds']=ssd::get();
        $n['hdds']=hdd::get();
        $n['graphics']=Graphic::get();
        $n['special_features']=SpecialFeature::get();
        $n['product_offers']=ProductOffer::get();
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

        // return $request->all();
        $this->validate($request,[
            'title'=>'string|required|max:255',
            'price'=>'required|numeric',
            'photo'=> 'string|required',
            'final_price'=> 'required|numeric',
            'model'=>'string|nullable|max:255',
            'mpn'=>'string|nullable|max:255',
            'discount'=>'required|numeric',
            'inventory_cost'=>'required|numeric',
            'summary'=>'string|nullable',
            'description'=>'string|nullable',
            'stock'=>"nullable|numeric",
            'brand_id'=>'nullable|exists:brands,id',
            'cat_id'=>'nullable|exists:categories,id',
            'child_cat_id'=>'nullable|exists:categories,id',
            // 'upcomming'=> "sometimes|in:1",
            'is_featured'=>'sometimes|in:1',
            'status'=>'nullable|in:active,inactive',
            // 'condition'=> 'nullable|in:default,new,hot',
            'special_feature' => 'nullable',

            //Processore Attributes
            'processor_generation_id' =>'nullable|exists:processor_generations,id',
            'processor_model_id' =>'nullable|exists:processor_models,id',
            'p_brand' => 'nullable|string|max:255',
            'c_speed' => 'nullable|string|max:255',
            'l1_cache' => 'nullable|string|max:255',
            'l2_cache' => 'nullable|string|max:255',
            'l3_cache' => 'nullable|string|max:255',
            'p_core' => 'nullable|numeric',
            'p_thread' => 'nullable|numeric',

            //display Attributes
            'display_size_id' =>'nullable|exists:display_sizes,id',
            'display_type_id' =>'nullable|exists:display_types,id',
            'd_resolution' => 'nullable|string|max:255',
            'd_other_features' => 'nullable|string',

            //Memory Attributes
            'ram_id' =>'nullable|exists:rams,id',
            'm_slot' => 'nullable|numeric',
            'm_removal' => 'sometimes|in:1',

            //Storage Attributes
            'ssd_id' =>'nullable|exists:ssds,id',
            'hdd_id' =>'nullable|exists:hdds,id',
            's_slot' => 'nullable|numeric',
            's_extra_m2_slot' => 'sometimes|in:1',
            's_support_type' => 'nullable|string|max:255',
            's_upgrade' => 'nullable|string|max:255',

            //Graphic Attributes
            'graphic_id' =>'nullable|exists:graphics,id',
            'g_model' => 'nullable|string|max:255',

            //Keyboar & Touchpad Attributes
            'k_type' => 'nullable|string|max:255',
            'touchpad' => 'sometimes|in:1',

            //Camera & Audio Attributes
            'webcam' => 'nullable|string|max:255',
            'microphone' => 'nullable|string|max:255',
            'speaker' => 'nullable|string|max:255',

            //Ports & Slots Attributes
            'optical_drive' => 'nullable|string|max:255',
            'card_reader' => 'nullable|string|max:255',
            'hdmi_p' => 'nullable|string|max:255',
            'usb2_p' => 'nullable|string|max:255',
            'usb3_p' => 'nullable|string|max:255',
            'type_c_tb_p' => 'nullable|string|max:255',
            'headphone_p' => 'nullable|string|max:255',
            'microphone_p' => 'nullable|string|max:255',

            //Network & Connectivity Attributes
            'wifi' => 'nullable|string|max:255',
            'bluetooth' => 'nullable|string|max:255',

            //Security Attributes
            'finger_print' => 'nullable|string|max:255',

            //Software Attributes
            'operating_system' => 'nullable|string|max:255',

            //Power Attributes
            'battery_type' => 'nullable|string|max:255',
            'battery_capacity' => 'nullable|string|max:255',
            'adapter_type' => 'nullable|string|max:255',

            //Physical Specification Attributes
            'color' => 'nullable|string|max:255',
            'dimension' => 'nullable|string|max:255',
            'weight' => 'nullable|string|max:255',

            //Warranty Attributes
            'w_details' => 'nullable|string|max:255',

            //installment
            'durations.*' => 'nullable|exists:durations,id',

        ]);
        $data=$request->all();
        // dd($request->durations);
        $special_feature = '';
        if($request->special_feature){
        foreach($request->special_feature as $sp){
            $special_feature = $special_feature.', '.$sp;
        }
        }
        $data['special_feature'] = $special_feature;
        $slug=Str::slug($request->title);
        $count=Product::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        $data['is_featured']=$request->input('is_featured',0);
        $status=Product::create($data);
        if($status){
            if($drs = $request->durations){
                foreach($drs as $dr){
                    if($dr){
                        Installment::create([
                            'duration_id' => $dr,
                            'product_id' => $status->id,
                        ]);
                    }

                }
            }
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
        $n['product'] = Product::with('cat_info','installment', 'sub_cat_info', 'brand', 'ProcessorGeneration', 'ProcessorModel', 'DisplayType', 'DisplaySize', 'Ram', 'ssd', 'hdd', 'Graphic', 'SpecialFeature')
                        ->find($id);
        $n['brands'] = Brand::get();
        $n['brands'] = Brand::get();
        $n['p_generations'] = ProcessorGeneration::get();
        $n['p_models'] = ProcessorModel::get();
        $n['d_sizes'] = DisplaySize::get();
        $n['d_types'] = DisplayType::get();
        $n['rams'] = Ram::get();
        $n['ssds'] = ssd::get();
        $n['hdds'] = hdd::get();
        $n['durations']=Duration::where('status',true)->get();
        $n['graphics'] = Graphic::get();
        $n['special_features'] = SpecialFeature::get();
        $n['product_offers'] = ProductOffer::get();
        $n['categories'] = Category::where('is_parent', 1)->get();
        return view('backend.product.edit',$n);
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
             'title'=>'string|required|max:255',
             'price'=>'required|numeric',
             'final_price'=>'nullable|numeric',
             'photo'=>'string|required',
             'stock'=>"required|numeric",
            'model'=>'string|nullable|max:255',
            'mpn'=>'string|nullable|max:255',
            'discount'=>'nullable|numeric',
            'summary'=>'string|nullable',
            'description'=>'string|nullable',
            'brand_id'=>'nullable|exists:brands,id',
            'cat_id'=>'nullable|exists:categories,id',
            'child_cat_id'=>'nullable|exists:categories,id',
            // 'upcomming'=> "sometimes|in:1",
            'is_featured'=>'sometimes|in:1',
            'status'=>'nullable|in:active,inactive',
            // 'condition'=> 'nullable|in:default,new,hot',
            'special_feature' => 'nullable',

            //Processore Attributes
            'processor_generation_id' =>'nullable|exists:processor_generations,id',
            'processor_model_id' =>'nullable|exists:processor_models,id',
            'p_brand' => 'nullable|string|max:255',
            'c_speed' => 'nullable|string|max:255',
            'l1_cache' => 'nullable|string|max:255',
            'l2_cache' => 'nullable|string|max:255',
            'l3_cache' => 'nullable|string|max:255',
            'p_core' => 'nullable|numeric',
            'p_thread' => 'nullable|numeric',

            //display Attributes
            'display_size_id' =>'nullable|exists:display_sizes,id',
            'display_type_id' =>'nullable|exists:display_types,id',
            'd_resolution' => 'nullable|string|max:255',
            'd_other_features' => 'nullable|string',

            //Memory Attributes
            'ram_id' =>'nullable|exists:rams,id',
            'm_slot' => 'nullable|numeric',
            'm_removal' => 'sometimes|in:1',

            //Storage Attributes
            'ssd_id' =>'nullable|exists:ssds,id',
            'hdd_id' =>'nullable|exists:hdds,id',
            's_slot' => 'nullable|numeric',
            's_extra_m2_slot' => 'sometimes|in:1',
            's_support_type' => 'nullable|string|max:255',
            's_upgrade' => 'nullable|string|max:255',

            //Graphic Attributes
            'graphic_id' =>'nullable|exists:graphics,id',
            'g_model' => 'nullable|string|max:255',

            //Keyboar & Touchpad Attributes
            'k_type' => 'nullable|string|max:255',
            'touchpad' => 'sometimes|in:1',

            //Camera & Audio Attributes
            'webcam' => 'nullable|string|max:255',
            'microphone' => 'nullable|string|max:255',
            'speaker' => 'nullable|string|max:255',

            //Ports & Slots Attributes
            'optical_drive' => 'nullable|string|max:255',
            'card_reader' => 'nullable|string|max:255',
            'hdmi_p' => 'nullable|string|max:255',
            'usb2_p' => 'nullable|string|max:255',
            'usb3_p' => 'nullable|string|max:255',
            'type_c_tb_p' => 'nullable|string|max:255',
            'headphone_p' => 'nullable|string|max:255',
            'microphone_p' => 'nullable|string|max:255',

            //Network & Connectivity Attributes
            'wifi' => 'nullable|string|max:255',
            'bluetooth' => 'nullable|string|max:255',

            //Security Attributes
            'finger_print' => 'nullable|string|max:255',

            //Software Attributes
            'operating_system' => 'nullable|string|max:255',

            //Power Attributes
            'battery_type' => 'nullable|string|max:255',
            'battery_capacity' => 'nullable|string|max:255',
            'adapter_type' => 'nullable|string|max:255',

            //Physical Specification Attributes
            'color' => 'nullable|string|max:255',
            'dimension' => 'nullable|string|max:255',
            'weight' => 'nullable|string|max:255',

            //Warranty Attributes
            'w_details' => 'nullable|string|max:255',
        ]);

        $data=$request->all();

        $special_feature = '';
        if
        ($request->special_feature){
            foreach ($request->special_feature as $sp) {
                $special_feature = $special_feature . ', ' . $sp;
            }
        }

        $data['special_feature'] = $special_feature;
        $data['is_featured']=$request->input('is_featured',0);

        // return $data;
        $status=$product->fill($data)->save();
        if($status){
            if ($drs = $request->durations) {
                foreach ($drs as $dr) {
                    if($dr){
                        Installment::updateOrCreate([
                            'duration_id' => $dr,
                            'product_id' => $product->id,
                        ]);
                    }

                }
            }
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
