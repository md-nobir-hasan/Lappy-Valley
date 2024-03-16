<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
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
        $n['products'] = Product::with('cat_info', 'sub_cat_info', 'brand', 'ProcessorGeneration', 'ProcessorModel', 'DisplayType', 'DisplaySize', 'Ram', 'ssd', 'hdd', 'Graphic', 'SpecialFeature')
            ->latest()->get();
        $n['count'] = Product::get();
        // return $products;
        return view('backend.product.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->ccan('Create Product');

        $n['brands'] = Brand::get();
        $n['p_generations'] = ProcessorGeneration::get();
        $n['durations'] = Duration::where('status', true)->get();
        $n['p_models'] = ProcessorModel::get();
        $n['d_sizes'] = DisplaySize::get();
        $n['d_types'] = DisplayType::get();
        $n['rams'] = Ram::get();
        $n['ssds'] = ssd::get();
        $n['hdds'] = hdd::get();
        $n['graphics'] = Graphic::get();
        $n['special_features'] = SpecialFeature::get();
        $n['product_offers'] = ProductOffer::get();
        $n['categories'] = Category::where('is_parent', 1)->get();
        // return $category;
        return view('backend.product.create', $n);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $this->ccan('Create Product');
        $data = $request->all();
        $special_feature = '';
        if ($request->special_feature) {
            foreach ($request->special_feature as $sp) {
                $special_feature = $special_feature . ', ' . $sp;
            }
        }
        $data['special_feature'] = $special_feature;
        $slug = Str::slug($request->title);
        $count = Product::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        $data['is_featured'] = $request->input('is_featured', 0);

        //brand firstOrCreate
        if ($request->brand_name) {
            $slug = Str::slug($request->brand_name);
            $brand_first = Brand::firstOrCreate([
                'title' => $request->brand_name,
                'slug' => $slug
            ]);
            $data['brand_id'] = $brand_first->id;
        }

        //processor_model firstOrCreate
        if ($request->processor_model_name) {
            $processor_model_first = ProcessorModel::firstOrCreate([
                'name' => $request->processor_model_name
            ]);
            $data['processor_model_id'] = $processor_model_first->id;
        }

        //processor_generation firstOrCreate
        if ($request->processor_generation_name) {
            $processor_generation_first = ProcessorGeneration::firstOrCreate([
                'name' => $request->processor_generation_name
            ]);
            $data['processor_generation_id'] = $processor_generation_first->id;
        }

        //display_size firstOrCreate
        if ($request->display_size_name) {
            $display_size_first = DisplaySize::firstOrCreate([
                'size' => $request->display_size_name
            ]);
            $data['display_size_id'] = $display_size_first->id;
        }

        //display_type firstOrCreate
        if ($request->display_type_name) {
            $display_type_first = DisplayType::firstOrCreate([
                'name' => $request->display_type_name
            ]);
            $data['display_type_id'] = $display_type_first->id;
        }

        //ram firstOrCreate
        if ($request->ram_name) {
            $ram_first = Ram::firstOrCreate([
                'capacity' => $request->ram_name
            ]);
            $data['ram_id'] = $ram_first->id;
        }

        //ssd firstOrCreate
        if ($request->ssd_name) {
            $ssd_first = ssd::firstOrCreate([
                'name' => $request->ssd_name
            ]);
            $data['ssd_id'] = $ssd_first->id;
        }

        //hdd firstOrCreate
        if ($request->hdd_name) {
            $hdd_first = hdd::firstOrCreate([
                'name' => $request->hdd_name
            ]);
            $data['hdd_id'] = $hdd_first->id;
        }

        //graphic firstOrCreate
        if ($request->graphic_name) {
            $graphic_first = Graphic::firstOrCreate([
                'name' => $request->graphic_name
            ]);
            $data['graphic_id'] = $graphic_first->id;
        }
        $status = Product::create($data);
        if ($status) {
            if ($drs = $request->durations) {
                foreach ($drs as $dr) {
                    if ($dr) {
                        Installment::create([
                            'duration_id' => $dr,
                            'product_id' => $status->id,
                        ]);
                    }
                }
            }
            request()->session()->flash('success', 'Product Successfully added');
        } else {
            request()->session()->flash('error', 'Please try again!!');
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
        $n['product'] = Product::with('cat_info', 'installment', 'sub_cat_info', 'brand', 'ProcessorGeneration', 'ProcessorModel', 'DisplayType', 'DisplaySize', 'Ram', 'ssd', 'hdd', 'Graphic', 'SpecialFeature')
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
        $n['durations'] = Duration::where('status', true)->get();
        $n['graphics'] = Graphic::get();
        $n['special_features'] = SpecialFeature::get();
        $n['product_offers'] = ProductOffer::get();
        $n['categories'] = Category::where('is_parent', 1)->get();
        return view('backend.product.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $this->ccan('Edit Product');

        $product = Product::findOrFail($id);


        $data = $request->all();

        $special_feature = '';
        if ($request->special_feature) {
            foreach ($request->special_feature as $sp) {
                $special_feature = $special_feature . ', ' . $sp;
            }
        }

        $data['special_feature'] = $special_feature;
        $data['is_featured'] = $request->input('is_featured', 0);
        $data['is_student'] = $request->input('is_student', 0);

        $status = $product->fill($data)->save();
        if ($status) {
            if ($drs = $request->durations) {
                foreach ($drs as $dr) {
                    if ($dr) {
                        Installment::updateOrCreate([
                            'duration_id' => $dr,
                            'product_id' => $product->id,
                        ]);
                    }
                }
            }
            request()->session()->flash('success', 'Product Successfully updated');
        } else {
            request()->session()->flash('error', 'Please try again!!');
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
        $product = Product::findOrFail($id);
        $status = $product->delete();

        if ($status) {
            request()->session()->flash('success', 'Product successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting product');
        }
        return redirect()->route('product.index');
    }
}
