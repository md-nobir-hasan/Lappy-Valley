@extends('backend.layouts.master')
@push('title')
    Edit Product
@endpush
@section('main-content')
    <div class="card">
        <h5 class="card-header">Edit Product</h5>
        <div class="card-body">
            <form method="post" action="{{ route('product.update', [$product->id]) }}">
                {{ csrf_field() }}
                @method('PUT')
                <div>
                    <div class="form-group">
                        <label for="inputTitle" class="col-form-label">Title<span class="text-danger">*</span> </label>
                        <input id="inputTitle" type="text" name="title" placeholder="Exp:- Enter title"
                            value="{{ $product->title }}" class="form-control">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="model" class="col-form-label">Model </label>
                        <input id="model" type="text" name="model" placeholder="Exp:- Enter Model"
                            value="{{ $product->model }}" class="form-control">
                        @error('model')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="mpn" class="col-form-label">Manufacture Name </label>
                        <input id="mpn" type="text" name="mpn" placeholder="Exp:- Enter Manufacture Name"
                            value="{{ $product->mpn }}" class="form-control">
                        @error('mpn')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="price" class="col-form-label">Price(BDT)<span class="text-danger">*</span> </label>
                        <input id="price" type="text" name="price" placeholder="Exp:- Enter price" step="1"
                            value="{{ $product->price }}" class="form-control">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="discount" class="col-form-label">Discount(%)</label>
                        <input id="discount" type="number" name="discount" min="0" max="100"
                            placeholder="Exp:- Enter discount" value="{{ $product->discount }}" class="form-control">
                        @error('discount')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group" id="final_price_div">
                        <label for="final_price" class="col-form-label">Final Price(tk)<span
                                class="text-danger">*</span></label>
                        <input id="final_price" type="text" name="final_price" min="0" max="500000"
                            placeholder="Exp:- Enter Final Price" value="{{ $product->final_price }}" class="form-control">
                        @error('final_price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inventory_cost" class="col-form-label">Inventory Cost</label>
                        <input id="inventory_cost" type="text" name="inventory_cost" min="0" max="1000000"
                            placeholder="Exp:- Enter Inventory Cost" value="{{ $product->inventory_cost }}"
                            class="form-control">
                        @error('inventory_cost')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="summary" class="col-form-label">Summary </label>
                        <textarea class="form-control" id="summary" name="summary">{!! $product->summary !!}</textarea>
                        @error('summary')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-form-label">Description</label>
                        <textarea class="form-control" id="description" name="description">{!! $product->description !!}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="brand_id">Brand</label>
                        {{-- {{$brands}} --}}

                        <select name="brand_id" class="form-control">
                            <option value="">--Select Brand--</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}" @selected($brand->id == $product->brand_id)>{{ $brand->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- {{$categories}} --}}
                    <div class="form-group">
                        <label for="cat_id">Category </label>
                        <select name="cat_id" id="cat_id" class="form-control">
                            <option value="">--Select any category--</option>
                            @foreach ($categories as $key => $cat_data)
                                <option value='{{ $cat_data->id }}' @selected($cat_data->id == $product->cat_id)>{{ $cat_data->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    {{-- rest of categories  --}}
                    <div>
                        <span>Other Categories:</span>
                        <div class="input-group mb-3 " id="other_cat_div">
                            @foreach ($others_cats as $other_cat)
                            <div class="input-group-prepend ml-1">
                                <div class="input-group-text bg-white">
                                    <input type="checkbox" @checked($other_cat->isHasThisProduct($product->slug)) id="other_cats{{$loop->index}}" name="other_cats_id[{{$loop->index}}]" value="{{$other_cat->id}}" >
                                </div>
                                <label for="other_cats{{$loop->index}}" class="input-group-text">{{$other_cat->title}}</label>
                            </div>
                            @endforeach

                        </div>
                        @error('condition.*')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- @dd($product->child_cat_id) --}}
                    <div class="form-group">
                        <label for="child_cat_id">Sub Category</label>
                        <select name="child_cat_id" id="child_cat_id" class="form-control">
                            <option value="" hidden>--Select any category--</option>
                            @foreach ($sub_categories as $sub_cat)
                            <option value="{{ $sub_cat->id }}" @selected($sub_cat->id == $product->child_cat_id)> {{ $sub_cat->title }} </option>
                            @endforeach
                        </select>
                    </div>
{{--
                    <div class="form-group">
                        <label for="condition">Condtion </label>
                        <select name="condition" id="condition" class="form-control">
                            <option value="">--Select any condition--</option>
                            <option value="Pre-Owned" @selected('Pre-Owned' == $product->condition)>Pre-Owned</option>
                            <option value="Brand New" @selected('Brand New' == $product->condition)>Brand New</option>
                        </select>
                        @error('condition')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div> --}}

                    <div class="form-group">
                        <label for="is_featured">Is Featured</label><br>
                        <input type="checkbox" name='is_featured' @checked($product->is_featured) id='is_featured'
                            value='1'>
                        <label for="is_featured">Yes</label>
                    </div>

                    {{-- <div class="form-group">
                        <label for="is_student">Is Student Laptop</label><br>
                        <input type="checkbox" name='is_student' @checked($product->is_student) id='is_student'
                            value='1'>
                        <label for="is_student">Yes</label>
                    </div> --}}

                    <div class="form-group">
                        <label for="upcomming_toggler">Up Comming</label><br>
                        <input type="checkbox" name='upcomming_toggler' @checked($product->upcomming)
                            id='upcomming_toggler' value='1'>
                        <label for="upcomming_toggler">Yes</label>
                        <div class="ml-3" id="div_lunch_date">
                            <label for="upcomming" class="col-form-label">Product Lunch Date </label>
                            <input id="upcomming" type="date" name="upcomming"
                                placeholder="Exp:- Enter Product Lunch Date" value="{{ $product->upcomming }}"
                                class="form-control">
                            @error('upcomming')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="isOfferToggler">Is Offer Products</label><br>
                        <input type="checkbox" name='isOfferToggler' @checked($product->product_offer_id) id='isOfferToggler'
                            value='1'>
                        <label for="isOfferToggler">Yes</label>
                        <div class="ml-3" id="div_product_offer">
                            <label for="product_offer_id" class="col-form-label">Select an offer </label>
                            <select name="product_offer_id" class="form-control" id="product_offer_id">
                                <option value="" hidden>Choose....</option>
                                @foreach ($product_offers as $poffer)
                                    <option value="{{ $poffer->id }}" @selected($poffer->id == $product->product_offer_id)>
                                        {{ $poffer->title . ' (' . $poffer->dis }}%)
                                    </option>
                                @endforeach
                            </select>
                            @error('product_offer_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="speacial_feature">Special Features </label>
                        <select name="special_feature[]" class="form-control selectpicker" id="speacial_feature"
                            multiple>
                            <option value="" hidden>Choose....</option>
                            @foreach ($special_features as $sp)
                                <option value="{{ $sp->name }}" @selected($sp->id == $product->upcomming)>{{ $sp->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('speacial_feature')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="stock">Stock<span class="text-danger">*</span> </label>
                        <input id="quantity" type="number" name="stock" min="0" step="1"
                            placeholder="Exp:- Enter quantity" value="{{ $product->stock }}" class="form-control">
                        @error('stock')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                {{-- ======== Processor Attributes  --}}
                <div class="mt-4">
                    <h4 class="fw-bold">Processor Attributes:</h4>
                    <div class="ml-3">

                        {{-- Processor Brand  --}}
                        <div class="form-group">
                            <label for="p_brand" class="col-form-label">Processor Brand </label>
                            <input id="p_brand" type="text" name="p_brand" placeholder="Exp:- 2.8 GHz upto 4.3 GHz"
                                value="{{ $product->p_brand }}" class="form-control">
                            @error('p_brand')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Processore Model  --}}
                        <div class="form-group">
                            <label for="processor_model_id">Prosessor Model </label>
                            <select name="processor_model_id" class="form-control" id="processor_model_id">
                                <option value="" hidden>Choose....</option>
                                @foreach ($p_models as $pm)
                                    <option value="{{ $pm->id }}" @selected($pm->id == $product->processor_model_id)>{{ $pm->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('processor_model_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Processore Generation --}}
                        <div class="form-group">
                            <label for="processor_generation_id">Prosessor Generation </label>
                            <select name="processor_generation_id" class="form-control" id="processor_generation_id">
                                <option value="" hidden>Choose....</option>
                                @foreach ($p_generations as $pg)
                                    <option value="{{ $pg->id }}" @selected($pg->id == $product->processor_generation_id)>{{ $pg->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('processor_generation_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Processor Speed  --}}
                        <div class="form-group">
                            <label for="c_speed" class="col-form-label">Processor Speed </label>
                            <input id="c_speed" type="text" name="c_speed" placeholder="Exp:- 2.8 GHz upto 4.3 GHz"
                                value="{{ $product->c_speed }}" class="form-control">
                            @error('c_speed')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- L1 cache  --}}
                        <div class="form-group">
                            <label for="l1_cache" class="col-form-label">L1 Cache </label>
                            <input id="l1_cache" type="text" name="l1_cache" placeholder="Exp:- 256 KB"
                                value="{{ $product->l1_cache }}" class="form-control">
                            @error('l1_cache')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- L2 cache  --}}
                        <div class="form-group">
                            <label for="l2_cache" class="col-form-label">L2 Cache </label>
                            <input id="l2_cache" type="text" name="l2_cache" placeholder="Exp:- 2 MB"
                                value="{{ $product->l2_cache }}" class="form-control">
                            @error('l2_cache')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- l3_cache  --}}
                        <div class="form-group">
                            <label for="l3_cache" class="col-form-label">L3 Cache </label>
                            <input id="l3_cache" type="text" name="l3_cache" placeholder="Exp:- 4 MB"
                                value="{{ $product->l3_cache }}" class="form-control">
                            @error('l3_cache')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- p_core  --}}
                        <div class="form-group">
                            <label for="p_core" class="col-form-label">Processore Core</label>
                            <input id="p_core" type="number" name="p_core" placeholder="Exp:- 2"
                                value="{{ $product->p_core }}" class="form-control">
                            @error('p_core')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- p_thread  --}}
                        <div class="form-group">
                            <label for="p_thread" class="col-form-label">Processore Thread</label>
                            <input id="p_thread" type="number" name="p_thread" placeholder="Exp:- 4"
                                value="{{ $product->p_thread }}" class="form-control">
                            @error('p_thread')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="p_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="p_other" name="p_other">{{ $product->p_other }}</textarea>
                            @error('p_other')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- ========== Display Attributes  --}}
                <div class="mt-4">
                    <h4>Display Attributes:</h4>
                    <div class="ml-3">
                        {{-- display Size --}}
                        <div class="form-group">
                            <label for="display_size_id">Display Size </label>
                            <select name="display_size_id" class="form-control" id="display_size_id">
                                <option value="" hidden>Choose....</option>
                                @foreach ($d_sizes as $ds)
                                    <option value="{{ $ds->id }}" @selected($ds->id == $product->display_size_id)>
                                        {{ $ds->size }} inch</option>
                                @endforeach
                            </select>
                            @error('display_size_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- display type --}}
                        <div class="form-group">
                            <label for="display_type_id">Display Type </label>
                            <select name="display_type_id" class="form-control" id="display_type_id">
                                <option value="" hidden>Choose....</option>
                                @foreach ($d_types as $dt)
                                    <option value="{{ $dt->id }}" @selected($dt->id == $product->display_type_id)>{{ $dt->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('display_type_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        {{-- d_resolution  --}}
                        <div class="form-group">
                            <label for="d_resolution" class="col-form-label">Display Resolution </label>
                            <input id="d_resolution" type="text" name="d_resolution" placeholder="Exp:- 1920 x 1080"
                                value="{{ $product->d_resolution }}" class="form-control">
                            @error('d_resolution')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- d_other  --}}
                        <div class="form-group">
                            <label for="d_other" class="col-form-label">Other Features</label>
                            <input id="d_other" type="text" name="d_other"
                                placeholder="Exp:- 220 nits, anti-glare, 171* Viewing Angle"
                                value="{{ $product->d_other }}" class="form-control">
                            @error('d_other')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- touch_screen  --}}
                        <div class="form-group">
                            <label for="touch_screen">Touch Screen</label><br>
                            <input type="checkbox" name='touch_screen' @checked($product->touch_screen) id='touch_screen'
                                value="1">
                            Yes
                            @error('touch_screen')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- =========== Memory Attributes  --}}
                <div class="mt-4">
                    <h4 class="font-weight-bold">Memory Attributes</h4>
                    <div class="ml-3">

                        <div class="form-group">
                            <label for="ram_id">RAM (GB)</label>
                            <select name="ram_id" class="form-control" id="ram_id">
                                <option value="" hidden>Choose....</option>
                                @foreach ($rams as $ram)
                                    <option value="{{ $ram->id }}" @selected($ram->id == $product->ram_id)>
                                        {{ $ram->capacity }}GB
                                    </option>
                                @endforeach
                            </select>
                            @error('ram_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- m_type  --}}
                        <div class="form-group">
                            <label for="m_type" class="col-form-label">Memory Type</label>
                            <input id="m_type" type="text" name="m_type" placeholder="Exp:- DDR4"
                                value="{{ $product->m_type }}" class="form-control">
                            @error('m_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- bus_speed  --}}
                        <div class="form-group">
                            <label for="bus_speed" class="col-form-label">Bus Speed</label>
                            <input id="bus_speed" type="text" name="bus_speed" placeholder="Exp:- 5100"
                                value="{{ $product->bus_speed }}" class="form-control">
                            @error('bus_speed')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- m_removal  --}}
                        <div class="form-group">
                            <label for="m_removal">Memory Removable</label><br>
                            <input type="checkbox" name='m_removal' @checked($product->m_removal) id='m_removal'
                                value='1'>
                            Yes
                            @error('m_removal')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- m_slot  --}}
                        <div class="form-group">
                            <label for="m_slot" class="col-form-label">Slots</label>
                            <input id="m_slot" type="number" name="m_slot" placeholder="Exp:- 2"
                                value="{{ $product->m_slot }}" class="form-control">
                            @error('m_slot')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="m_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="m_other" name="m_other">{{ $product->m_other }}</textarea>
                            @error('m_other')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- ========== Storage Attributes  --}}
                <div class="mt-4">
                    <h4>Storage Attributes</h4>
                    <div class="ml-3">

                        {{-- SSD  --}}
                        <div class="form-group">
                            <label for="ssd_id">SSD </label>
                            <select name="ssd_id" class="form-control" id="ssd_id">
                                <option value="">Choose....</option>
                                @foreach ($ssds as $ssd)
                                    <option value="{{ $ssd->id }}" @selected($ssd->id == $product->ssd_id)>{{ $ssd->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('ssd_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- HDD --}}
                        <div class="form-group">
                            <label for="hdd_id">HDD </label>
                            <select name="hdd_id" class="form-control" id="hdd_id">
                                <option value="">Choose....</option>
                                @foreach ($hdds as $hdd)
                                    <option value="{{ $hdd->id }}" @selected($hdd->id == $product->hdd_id)>{{ $hdd->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('hdd_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- s_extra_m2_slot  --}}
                        <div class="form-group">
                            <label for="s_extra_m2_slot">Extra M2 Slot</label><br>
                            <input type="checkbox" name='s_extra_m2_slot' @checked($product->s_extra_m2_slot)
                                id='s_extra_m2_slot' value='1'>
                            <label for="s_extra_m2_slot"> Yes</label>
                            @error('s_extra_m2_slot')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- @dd($durations) --}}
                        {{-- s_support_type  --}}
                        <div class="form-group">
                            <label for="s_support_type" class="col-form-label">Support SSD/HDD type </label>
                            <input id="s_support_type" type="text" name="s_support_type"
                                placeholder="Exp:- PCle NVMe M.2" value="{{ $product->s_support_type }}"
                                class="form-control">
                            @error('s_support_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- s_upgrade  --}}
                        <div class="form-group">
                            <label for="s_upgrade" class="col-form-label">Upgradable note </label>
                            <input id="s_upgrade" type="text" name="s_upgrade"
                                placeholder="Exp:- Installed SSD can be upgradeable" value="{{ $product->s_upgrade }}"
                                class="form-control">
                            @error('s_upgrade')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="stor_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="stor_other" name="stor_other">{{ $product->stor_other }}</textarea>
                            @error('stor_other')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- ========== Graphic Attributes  --}}
                <div class="mt-4">
                    <h4>Graphic Attributes</h4>
                    <div class="ml-3">

                        {{-- g_model  --}}
                        <div class="form-group">
                            <label for="g_model" class="col-form-label">Model</label>
                            <input id="g_model" type="text" name="g_model" placeholder="Exp:- AMD Radeon 610M"
                                value="{{ $product->g_model }}" class="form-control">
                            @error('g_model')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Graphics Capcity  --}}
                        <div class="form-group">
                            <label for="graphic_id">Capacity</label>
                            <select name="graphic_id" class="form-control" id="graphic_id">
                                <option value="" hidden>Choose....</option>
                                @foreach ($graphics as $graphic)
                                    <option value="{{ $graphic->id }}" @selected($graphic->id == $product->graphic_id)>
                                        {{ $graphic->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('graphic_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="g_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="g_other" name="g_other">{{ $product->g_other }}</textarea>
                            @error('g_other')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- ========== Keyboard & Touchpad Attributes  --}}
                <div class="mt-4">
                    <h4>Keyboard & Touchpad Attributes</h4>
                    <div class="ml-3">
                        {{-- k_type  --}}
                        <div class="form-group">
                            <label for="k_type" class="col-form-label">Keyboard Type</label>
                            <input id="k_type" type="text" name="k_type" placeholder="Exp:- Standard"
                                value="{{ $product->k_type }}" class="form-control">
                            @error('k_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Backlight  --}}
                        <div class="form-group">
                            <label for="k_backlight">Backlight</label><br>
                            <input type="checkbox" name='k_backlight' @checked($product->k_backlight) id='k_backlight'
                                value='1'>
                            <label for="k_backlight">Yes</label>
                            @error('k_backlight')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- touchpad  --}}
                        <div class="form-group">
                            <label for="touchpad">Touchpad</label><br>
                            <input type="checkbox" name='touchpad' @checked($product->touchpad) id='touchpad'
                                value='1'>
                            <label for="touchpad">Yes</label>
                            @error('touchpad')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="k_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="k_other" name="k_other">{{ $product->k_other }}</textarea>
                            @error('k_other')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- ========== Camera & Audio Attributes  --}}
                <div class="mt-4">
                    <h4>Camera & Audio Attributes</h4>
                    <div class="ml-3">

                        {{-- webcam  --}}
                        <div class="form-group">
                            <label for="webcam" class="col-form-label">Webcam</label>
                            <input id="webcam" type="text" name="webcam" placeholder="Exp:- Yes"
                                value="{{ $product->webcam ?? 'Yes' }}" class="form-control">
                            @error('webcam')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- microphone  --}}
                        <div class="form-group">
                            <label for="microphone" class="col-form-label">Microphone</label>
                            <input id="microphone" type="text" name="microphone" placeholder="Exp:- Yes"
                                value="{{ $product->microphone ?? 'Yes' }}" class="form-control">
                            @error('microphone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- speaker  --}}
                        <div class="form-group">
                            <label for="speaker" class="col-form-label">Speaker</label>
                            <input id="speaker" type="text" name="speaker" placeholder="Exp:- Yes"
                                value="{{ $product->speaker ?? 'Yes' }}" class="form-control">
                            @error('speaker')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="ca_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="ca_other" name="ca_other">{{ $product->ca_other }}</textarea>
                            @error('ca_other')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>


                {{-- ========== Port & Slots Attributes  --}}
                <div class="mt-4">
                    <h4>Port & Slots Attributes</h4>
                    <div class="ml-3">

                        {{-- optical_drive  --}}
                        <div class="form-group">
                            <label for="optical_drive" class="col-form-label">Optical Drive</label>
                            <input id="optical_drive" type="text" name="optical_drive" placeholder="Exp:- Yes"
                                value="{{ $product->optical_drive }}" class="form-control">
                            @error('optical_drive')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- card_reader  --}}
                        <div class="form-group">
                            <label for="card_reader" class="col-form-label">Card Reader </label>
                            <input id="card_reader" type="text" name="card_reader"
                                placeholder="Exp:- SD Media Card Reader" value="{{ $product->card_reader }}"
                                class="form-control">
                            @error('card_reader')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- hdmi_p  --}}
                        <div class="form-group">
                            <label for="hdmi_p" class="col-form-label">HDMI Port </label>
                            <input id="hdmi_p" type="text" name="hdmi_p" placeholder="Exp:- 1x HDMI 1.4b"
                                value="{{ $product->hdmi_p }}" class="form-control">
                            @error('hdmi_p')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- usb2_p  --}}
                        <div class="form-group">
                            <label for="usb2_p" class="col-form-label">USB 2 Port </label>
                            <input id="usb2_p" type="text" name="usb2_p" placeholder="Exp:- 1x USB 2.0 Type-A"
                                value="{{ $product->usb2_p }}" class="form-control">
                            @error('usb2_p')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- usb3_p  --}}
                        <div class="form-group">
                            <label for="usb3_p" class="col-form-label">USB 3 Port </label>
                            <input id="usb3_p" type="text" name="usb3_p"
                                placeholder="Exp:- 1x USB 3.2 Gen 1 Type-A" value="{{ $product->usb3_p }}"
                                class="form-control">
                            @error('usb3_p')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- type_c_tb_p  --}}
                        <div class="form-group">
                            <label for="type_c_tb_p" class="col-form-label">Type-C (Thenderbold Port) </label>
                            <input id="type_c_tb_p" type="text" name="type_c_tb_p"
                                placeholder="Exp:- 1x USB-C 3.2 Gen 1 (Support data transfer only)"
                                value="{{ $product->type_c_tb_p }}" class="form-control">
                            @error('type_c_tb_p')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- headphone_p  --}}
                        <div class="form-group">
                            <label for="headphone_p" class="col-form-label">Headphone </label>
                            <input id="headphone_p" type="text" name="headphone_p" placeholder="Exp:- 1x Headphone"
                                value="{{ $product->headphone_p }}" class="form-control">
                            @error('headphone_p')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- microphone_p  --}}
                        <div class="form-group">
                            <label for="microphone_p" class="col-form-label">Microphone </label>
                            <input id="microphone_p" type="text" name="microphone_p"
                                placeholder="Exp:- Microphone Port Combo" value="{{ $product->microphone_p }}"
                                class="form-control">
                            @error('microphone_p')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="ps_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="ps_other" name="ps_other">{{ $product->ps_other }}</textarea>
                            @error('ps_other')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Network & Connectivity Attributes --}}
                <div class="mt-4">
                    <h4>Network & Connectivity Attributes</h4>
                    <div class="ml-3">

                        {{-- wifi  --}}
                        <div class="form-group">
                            <label for="wifi" class="col-form-label">WIFI </label>
                            <input id="wifi" type="text" name="wifi" placeholder="Exp:- 11ax, 2x2"
                                value="{{ $product->wifi }}" class="form-control">
                            @error('wifi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- bluetooth  --}}
                        <div class="form-group">
                            <label for="bluetooth" class="col-form-label">Bluetooth </label>
                            <input id="bluetooth" type="text" name="bluetooth" placeholder="Exp:- Bluetooth 5.0"
                                value="{{ $product->bluetooth }}" class="form-control">
                            @error('bluetooth')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="nc_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="nc_other" name="nc_other">{{ $product->nc_other }}</textarea>
                            @error('nc_other')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Security Attributes --}}
                <div class="mt-4">
                    <h4>Security Attributes</h4>
                    <div class="ml-3">
                        {{-- finger_print  --}}
                        <div class="form-group">
                            <label for="finger_print" class="col-form-label">Finger Print</label>
                            <input id="finger_print" type="text" name="finger_print" placeholder="Exp:- Yes/No"
                                value="{{ $product->finger_print }}" class="form-control">
                            @error('finger_print')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- facelock  --}}
                        <div class="form-group">
                            <label for="facelock" class="col-form-label">Finger Print</label>
                            <input id="facelock" type="text" name="facelock" placeholder="Exp:- Yes/No"
                                value="{{ $product->facelock }}" class="form-control">
                            @error('facelock')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="s_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="s_other" name="s_other">{{ $product->s_other }}</textarea>
                            @error('s_other')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Software Attributes --}}
                <div class="mt-4">
                    <h4>Software Attributes</h4>
                    <div class="ml-3">
                        {{-- operating_system  --}}
                        <div class="form-group">
                            <label for="operating_system" class="col-form-label">Operating System </label>
                            <input id="operating_system" type="text" name="operating_system"
                                placeholder="Exp:- Windows" value="{{ $product->operating_system }}"
                                class="form-control">
                            @error('operating_system')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="soft_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="soft_other" name="soft_other">{{ $product->soft_other }}</textarea>
                            @error('soft_other')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Power Attributes --}}
                <div class="mt-4">
                    <h4>Power Attributes</h4>
                    <div class="ml-3">

                        {{-- battery_type  --}}
                        <div class="form-group">
                            <label for="battery_type" class="col-form-label">Battery Type </label>
                            <input id="battery_type" type="text" name="battery_type"
                                placeholder="Exp:- 3 Cell Li-ion" value="{{ $product->battery_type }}"
                                class="form-control">
                            @error('battery_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- battery_capacity  --}}
                        <div class="form-group">
                            <label for="battery_capacity" class="col-form-label">Battery Capacity </label>
                            <input id="battery_capacity" type="text" name="battery_capacity"
                                placeholder="Exp:- 42Whr" value="{{ $product->battery_capacity }}"
                                class="form-control">
                            @error('battery_capacity')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- adapter_type  --}}
                        <div class="form-group">
                            <label for="adapter_type" class="col-form-label">Adapter Type </label>
                            <input id="adapter_type" type="text" name="adapter_type"
                                placeholder="Exp:- 65W Round Tip(3-pin)" value="{{ $product->adapter_type }}"
                                class="form-control">
                            @error('adapter_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="power_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="power_other" name="power_other">{{ $product->power_other }}</textarea>
                            @error('power_other')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Physical Specification Attributes --}}
                <div class="mt-4">
                    <h4>Physical Specification Attributes</h4>
                    <div class="ml-3">

                        {{-- color  --}}
                        <div class="form-group">
                            <label for="color" class="col-form-label">Color</label>
                            <input id="color" type="text" name="color" placeholder="Exp:- Cloud Grey"
                                value="{{ $product->color }}" class="form-control">
                            @error('color')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- dimension  --}}
                        <div class="form-group">
                            <label for="dimension" class="col-form-label">Dimension </label>
                            <input id="dimension" type="text" name="dimension"
                                placeholder="Exp:- 325.3 x 216.5 x 17.9 mm" value="{{ $product->dimension }}"
                                class="form-control">
                            @error('dimension')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- weight  --}}
                        <div class="form-group">
                            <label for="weight" class="col-form-label">Weight </label>
                            <input id="weight" type="text" name="weight" placeholder="Exp:- 1.58 kg"
                                value="{{ $product->weight }}" class="form-control">
                            @error('weight')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="physi_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="physi_other" name="physi_other">{{ $product->physi_other }}</textarea>
                            @error('physi_other')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Warranty Attributes --}}
                <div class="mt-4">
                    <h4>Warranty Attributes</h4>
                    <div class="ml-3">
                        {{-- replacement_warranty  --}}
                        <div class="form-group">
                            <label for="replacement_warranty" class="col-form-label">Replacement Warranty</label>
                            <input id="replacement_warranty" type="text" name="replacement_warranty"
                                placeholder="2 months" value="{{ $product->replacement_warranty }}"
                                class="form-control">
                            @error('replacement_warranty')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- motherboard_warranty  --}}
                        <div class="form-group">
                            <label for="motherboard_warranty" class="col-form-label">Motherboard Warranty</label>
                            <input id="motherboard_warranty" type="text" name="motherboard_warranty"
                                placeholder="1 year" value="{{ $product->motherboard_warranty }}" class="form-control">
                            @error('motherboard_warranty')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- service_warranty  --}}
                        <div class="form-group">
                            <label for="service_warranty" class="col-form-label">Service Warranty</label>
                            <input id="service_warranty" type="text" name="service_warranty" placeholder="Lifetime"
                                value="{{ $product->service_warranty }}" class="form-control">
                            @error('service_warranty')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- disclaimer  --}}
                        <div class="form-group">
                            <label for="disclaimer" class="col-form-label">Disclaimer</label>
                            <input id="disclaimer" type="text" name="disclaimer" placeholder=""
                                value="{{ $product->disclaimer }}" class="form-control">
                            @error('disclaimer')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- note  --}}
                        <div class="form-group">
                            <label for="note" class="col-form-label">Note</label>
                            <input id="note" type="text" name="note" placeholder=""
                                value="{{ $product->note }}" class="form-control">
                            @error('note')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- w_details  --}}
                        <div class="form-group">
                            <label for="w_details" class="col-form-label">Other Warranty</label>
                            <input id="w_details" type="text" name="w_details"
                                placeholder="Exp:- 2 years warranty (Battery adapter 1 year)"
                                value="{{ $product->w_details }}" class="form-control">
                            @error('w_details')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- Installment process --}}
                <div class="mt-4">
                    <h4>Installment</h4>
                    <div class="ml-3">
                        {{-- installment duration  --}}
                        <div class="form-group">
                            <label for="durations">Duration </label>
                            <select name="durations[]" class="form-control selectpicker" id="durations">
                                @foreach ($durations as $duration)
                                    <option value="{{ $duration->id }}" @selected($duration->id == $product->installment?->id)>
                                        {{ $duration->year ? $duration->year . ' years ' : ' ' }}{{ $duration->month ? $duration->month . ' month' : ' ' }}
                                    </option>
                                @endforeach
                            </select>
                            @error('durations')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Photo<span class="text-danger">*</span> </label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input id="thumbnail" class="form-control" type="text" name="photo"
                            value="{{ $product->photo }}">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status" class="col-form-label">Status </label>
                    <select name="status" class="form-control">
                        <option value="active" @selected($product->status == 'active')>Active</option>
                        <option value="inactive" @selected($product->status == 'inactive')>Inactive</option>
                    </select>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3 form-group">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/summernote/summernote-lite.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush
@push('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="{{ asset('backend/summernote/summernote-lite.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <script>
        $('#lfm').filemanager('image');

        $(document).ready(function() {
            $('#summary').summernote({
                placeholder: "Write short description.....",
                tabsize: 2,
                height: 150,
            });
            $('#description').summernote({
                placeholder: "Write detail description.....",
                tabsize: 2,
                height: 200
            });

            let show = false;
            $('#upcomming_toggler').on('click', function() {
                $('#div_lunch_date').toggle();
                //  show = true;

            });
            $('#isOfferToggler').on('click', function() {
                $('#div_product_offer').toggle();
                //  show = true;

            });

            // $('#final_price_div').hide();

            $('#price').on('keyup change', function() {
                let price_with_comma = $(this).val() ? $(this).val() : '0';
                let final_price_with_comma = $('#final_price').val() ? $('#final_price').val() : '0';

                let price = parseInt(price_with_comma.replace(/,/g, ''));
                let final_price = parseInt(final_price_with_comma.replace(/,/g, ''));
                let discount = Math.round(((price - final_price) * 100) / price);
                $('#discount').val(discount);
            });

            $('#final_price').on('keyup change', function() {
                let price_with_comma = $('#price').val() ? $('#price').val() : '0';
                let final_price_with_comma = $(this).val() ? $(this).val() : '0';

                let price = parseInt(price_with_comma.replace(/,/g, ''));
                let final_price = parseInt(final_price_with_comma.replace(/,/g, ''));
                let discount = Math.round(((price - final_price) * 100) / price);

                $('#discount').val(discount);
            });

            $('#discount').on('keyup', function() {
                let price_with_comma = $('#price').val() ? $('#price').val() : '0';
                let discount = $('#discount').val() ? $('#discount').val() : 0;

                let price = parseInt(price_with_comma.replace(/,/g, ''));
                let final_price = price - Math.round(price * discount / 100);
                console.log(price, discount, final_price);

                $('#final_price').val(final_price);
                // $('#final_price_div').show();
            });

            $('#cat_id').change(function() {
                var cat_id = $(this).val();
                // alert(cat_id);
                if (cat_id != null) {
                    // Ajax call
                    $.ajax({
                        url: "/admin/category/" + cat_id + "/child",
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: cat_id
                        },
                        type: "POST",
                        success: function(response) {
                            if (typeof(response) != 'object') {
                                response = $.parseJSON(response)
                            }

                            var html_option =
                                "<option value=''>----Select sub category----</option>";
                            if (response.status) {
                                var data = response.data.child_cats;
                                if (data) {
                                    $.each(data, function(id, title) {
                                        html_option += "<option value='" + id + "'>" +
                                            title +
                                            "</option>"
                                    });
                                }
                            }
                            let other_cats = '';
                            $.each(response.data.categories, function(index, cat) {
                                other_cats += `<div class="input-group-prepend ml-1">
                                                    <div class="input-group-text bg-white">
                                                        <input id="other_cats${index}" @checked($other_cat->isHasThisProduct($product->slug)) name="other_cats_id[${index}]" value="${cat.id}" type="checkbox">
                                                    </div>
                                                    <label for="other_cats${index}" class="input-group-text">${cat.title}</label>
                                                </div>`;
                            });
                            $('#other_cat_div').html(other_cats);
                            $('#child_cat_id').html(html_option);
                        }
                    });
                } else {}
            });

        });
    </script>
@endpush
