@extends('backend.layouts.master')
@push('title')
    Add Product
@endpush
@section('main-content')
    <div class="card">
        <h5 class="card-header">Add Product</h5>
        <div class="card-body">
            <form method="post" action="{{ route('product.store') }}">
                {{ csrf_field() }}
                <div>
                    <div class="form-group">
                        <label for="inputTitle" class="col-form-label">Title<span class="text-danger">*</span></label>
                        <input id="inputTitle" type="text" name="title" placeholder="Exp:- Enter title"
                            value="{{ old('title') }}" class="form-control">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="model" class="col-form-label">Model</label>
                        <input id="model" type="text" name="model" placeholder="Exp:- Enter Model"
                            value="{{ old('model') }}" class="form-control">
                        @error('model')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="mpn" class="col-form-label">Manufacture Name</label>
                        <input id="mpn" type="text" name="mpn" placeholder="Exp:- Enter Manufacture Name"
                            value="{{ old('mpn') }}" class="form-control">
                        @error('mpn')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="price" class="col-form-label">Price(BDT)<span class="text-danger">*</span> </label>
                        <input id="price" type="text" name="price" placeholder="Exp:- Enter price" step="1"
                            value="{{ old('price') }}" class="form-control">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="discount" class="col-form-label">Discount(%)</label>
                        <input id="discount" type="number" name="discount" min="0" max="100"
                            placeholder="Exp:- Enter discount" value="{{ old('discount') ?? '0' }}" class="form-control">
                        @error('discount')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group" id="final_price_div">
                        <label for="final_price" class="col-form-label">Final Price(tk)<span
                                class="text-danger">*</span></label>
                        <input id="final_price" type="text" name="final_price" min="0" max="500000"
                            placeholder="Exp:- Enter Final Price" value="{{ old('final_price') }}" class="form-control">
                        @error('final_price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inventory_cost" class="col-form-label">Inventory Cost</label>
                        <input id="inventory_cost" type="text" name="inventory_cost" min="0" max="1000000"
                            placeholder="Exp:- Enter Inventory Cost" value="{{ old('inventory_cost') ?? '0' }}"
                            class="form-control">
                        @error('inventory_cost')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="summary" class="col-form-label">Summary </label>
                        <textarea class="form-control" id="summary" name="summary">{{ old('summary') }}</textarea>
                        @error('summary')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-form-label">Description</label>
                        <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="brand_id">Brand</label>
                        {{-- {{$brands}} --}}
                        <div class="input-group mb-3">
                            <select name="brand_id" class="form-control">
                                <option value="">--Select Brand--</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" @selected($brand->id == old('brand_id'))>{{ $brand->title }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-danger m-0 p-0"><svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 9.75h4.875a2.625 2.625 0 0 1 0 5.25H12M8.25 9.75 10.5 7.5M8.25 9.75 10.5 12m9-7.243V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0c1.1.128 1.907 1.077 1.907 2.185Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    {{-- {{$categories}} --}}
                    <div class="form-group">
                        <label for="cat_id">Category</label>
                        <select name="cat_id" id="cat_id" class="form-control">
                            <option value="">--Select any category--</option>
                            @foreach ($categories as $key => $cat_data)
                                <option value='{{ $cat_data->id }}' @selected($cat_data->id == old('cat_id'))>{{ $cat_data->title }}
                                </option>
                            @endforeach
                        </select>
                        @error('cat_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group d-none" id="child_cat_div">
                        <label for="child_cat_id">Sub Category</label>
                        <select name="child_cat_id" id="child_cat_id" class="form-control">
                            <option value="">--Select any category--</option>
                        </select>
                    </div>

                    {{-- <div class="form-group">
                        <label for="condition" class="col-form-label">Condition</label>
                        <input id="condition" type="text" name="condition" placeholder="Exp:- Enter condition"
                            value="{{ old('condition') }}" class="form-control">
                        @error('condition')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div> --}}

                    <div class="form-group">
                        <label for="condition">Condtion </label>
                        <select name="condition" id="condition" class="form-control">
                            <option value="">--Select any condition--</option>
                            <option value="Pre-Owned">Pre-Owned</option>
                            <option value="Brand New">Brand New</option>
                        </select>
                        @error('condition')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="is_featured">Is Featured</label><br>
                        <input type="checkbox" name='is_featured' @checked(old('is_featured')) id='is_featured'
                            value='1'>
                        <label for="is_featured">Yes</label>
                    </div>

                    <div class="form-group">
                        <label for="is_student">Is Student Laptop</label><br>
                        <input type="checkbox" name='is_student' @checked(old('is_student')) id='is_student'
                            value='1'>
                        <label for="is_student">Yes</label>
                    </div>

                    <div class="form-group">
                        <label for="upcomming_toggler">Up Comming</label><br>
                        <input type="checkbox" name='upcomming_toggler' @checked(old('upcomming_toggler'))
                            id='upcomming_toggler' value='1'>
                        <label for="upcomming_toggler">Yes</label>
                        <div class="ml-3" id="div_lunch_date">
                            <label for="upcomming" class="col-form-label">Product Lunch Date </label>
                            <input id="upcomming" type="date" name="upcomming"
                                placeholder="Exp:- Enter Product Lunch Date" value="{{ old('upcomming') }}"
                                class="form-control">
                            @error('upcomming')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="isOfferToggler">Is Offer Products</label><br>
                        <input type="checkbox" name='isOfferToggler' @checked(old('isOfferToggler')) id='isOfferToggler'
                            value='1'>
                        <label for="isOfferToggler">Yes</label>
                        <div class="ml-3" id="div_product_offer">
                            <label for="product_offer_id" class="col-form-label">Select an offer </label>
                            <select name="product_offer_id" class="form-control" id="product_offer_id">
                                <option value="" hidden>Choose....</option>
                                @foreach ($product_offers as $poffer)
                                    <option value="{{ $poffer->id }}" @selected($poffer->id == old('product_offer_id'))>
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
                                <option value="{{ $sp->name }}" @selected($sp->name == old('speacial_feature'))>{{ $sp->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('speacial_feature')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="stock">Stock<span class="text-danger">*</span></label>
                        <input id="quantity" type="number" name="stock" min="0" step=""
                            placeholder="Exp:- Enter quantity" value="{{ old('stock') ?? 1 }}" class="form-control">
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
                                value="{{ old('p_brand') }}" class="form-control">
                            @error('p_brand')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Processore Type  --}}
                        <div class="form-group">
                            <label for="processor_model_id">Prosessor Type </label>
                            <select name="processor_model_id" class="form-control" id="processor_model_id">
                                <option value="" hidden>Choose....</option>
                                @foreach ($p_models as $pm)
                                    <option value="{{ $pm->id }}" @selected($pm->id == old('processor_model_id'))>{{ $pm->name }}
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
                                    <option value="{{ $pg->id }}" @selected($pg->id == old('processor_generation_id'))>{{ $pg->name }}
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
                                value="{{ old('c_speed') }}" class="form-control">
                            @error('c_speed')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- L1 cache  --}}
                        <div class="form-group">
                            <label for="l1_cache" class="col-form-label">L1 Cache </label>
                            <input id="l1_cache" type="text" name="l1_cache" placeholder="Exp:- 256 KB"
                                value="{{ old('l1_cache') }}" class="form-control">
                            @error('l1_cache')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- L2 cache  --}}
                        <div class="form-group">
                            <label for="l2_cache" class="col-form-label">L2 Cache </label>
                            <input id="l2_cache" type="text" name="l2_cache" placeholder="Exp:- 2 MB"
                                value="{{ old('l2_cache') }}" class="form-control">
                            @error('l2_cache')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- l3_cache  --}}
                        <div class="form-group">
                            <label for="l3_cache" class="col-form-label">L3 Cache </label>
                            <input id="l3_cache" type="text" name="l3_cache" placeholder="Exp:- 4 MB"
                                value="{{ old('l3_cache') }}" class="form-control">
                            @error('l3_cache')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- p_core  --}}
                        <div class="form-group">
                            <label for="p_core" class="col-form-label">Processore Core</label>
                            <input id="p_core" type="number" name="p_core" placeholder="Exp:- 2"
                                value="{{ old('p_core') }}" class="form-control">
                            @error('p_core')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- p_thread  --}}
                        <div class="form-group">
                            <label for="p_thread" class="col-form-label">Processore Thread</label>
                            <input id="p_thread" type="number" name="p_thread" placeholder="Exp:- 4"
                                value="{{ old('p_thread') }}" class="form-control">
                            @error('p_thread')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="p_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="p_other" name="p_other">{{ old('p_other') }}</textarea>
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
                                    <option value="{{ $ds->id }}" @selected($ds->id == old('display_size_id'))>
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
                                    <option value="{{ $dt->id }}" @selected($dt->id == old('display_type_id'))>{{ $dt->name }}
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
                                value="{{ old('d_resolution') }}" class="form-control">
                            @error('d_resolution')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- d_other  --}}
                        <div class="form-group">
                            <label for="d_other" class="col-form-label">Other Features</label>
                            <input id="d_other" type="text" name="d_other"
                                placeholder="Exp:- 220 nits, anti-glare, 171* Viewing Angle" value="{{ old('d_other') }}"
                                class="form-control">
                            @error('d_other')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- touch_screen  --}}
                        <div class="form-group">
                            <label for="touch_screen">Touch Screen</label><br>
                            <input type="checkbox" name='touch_screen' @checked(old('touch_screen')) id='is_featured'
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
                                    <option value="{{ $ram->id }}" @selected($ram->id == old('ram_id'))>
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
                                value="{{ old('m_type') }}" class="form-control">
                            @error('m_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- bus_speed  --}}
                        <div class="form-group">
                            <label for="bus_speed" class="col-form-label">Bus Speed</label>
                            <input id="bus_speed" type="text" name="bus_speed" placeholder="Exp:- 5100"
                                value="{{ old('bus_speed') }}" class="form-control">
                            @error('bus_speed')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- m_removal  --}}
                        <div class="form-group">
                            <label for="m_removal">Memory Removable</label><br>
                            <input type="checkbox" name='m_removal' @checked(old('m_removal')) id='m_removal'
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
                                value="{{ old('m_slot') }}" class="form-control">
                            @error('m_slot')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- m_other  --}}
                        <div class="form-group">
                            <label for="m_other" class="col-form-label">Other details</label>
                            <input id="m_other" type="text" name="m_other" placeholder="Exp:- Slots Use 1 Of 2"
                                value="{{ old('m_other') }}" class="form-control">
                            @error('m_other')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="m_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="m_other" name="m_other">{{ old('m_other') }}</textarea>
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
                                    <option value="{{ $ssd->id }}" @selected($ssd->id == old('ssd_id'))>{{ $ssd->name }}
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
                                    <option value="{{ $hdd->id }}" @selected($hdd->id == old('hdd_id'))>{{ $hdd->name }}
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
                            <input type="checkbox" name='s_extra_m2_slot' @checked(old('s_extra_m2_slot'))
                                id='s_extra_m2_slot' value='1'>
                            <label for="s_extra_m2_slot"> Yes</label>
                            @error('s_extra_m2_slot')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- s_support_type  --}}
                        <div class="form-group">
                            <label for="s_support_type" class="col-form-label">Support SSD/HDD type </label>
                            <input id="s_support_type" type="text" name="s_support_type"
                                placeholder="Exp:- PCle NVMe M.2" value="{{ old('s_support_type') }}"
                                class="form-control">
                            @error('s_support_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- s_upgrade  --}}
                        <div class="form-group">
                            <label for="s_upgrade" class="col-form-label">Upgradable note </label>
                            <input id="s_upgrade" type="text" name="s_upgrade"
                                placeholder="Exp:- Installed SSD can be upgradeable" value="{{ old('s_upgrade') }}"
                                class="form-control">
                            @error('s_upgrade')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="stor_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="stor_other" name="stor_other">{{ old('stor_other') }}</textarea>
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
                                value="{{ old('g_model') }}" class="form-control">
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
                                    <option value="{{ $graphic->id }}" @selected($graphic->id == old('graphic_id'))>
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
                            <textarea class="form-control" id="g_other" name="g_other">{{ old('g_other') }}</textarea>
                            @error('g_other')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- ========== Keyboard and Touchpad Attributes  --}}
                <div class="mt-4">
                    <h4>Keyboard & Touchpad Attributes</h4>
                    <div class="ml-3">
                        {{-- k_type  --}}
                        <div class="form-group">
                            <label for="k_type" class="col-form-label">Keyboard Type</label>
                            <input id="k_type" type="text" name="k_type" placeholder="Exp:- Standard"
                                value="{{ old('k_type') }}" class="form-control">
                            @error('k_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Backlight  --}}
                        <div class="form-group">
                            <label for="k_backlight">Backlight</label><br>
                            <input type="checkbox" name='k_backlight' @checked(old('backlight')) id='k_backlight'
                                value='1'>
                            <label for="k_backlight">Yes</label>
                            @error('k_backlight')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Touchpad  --}}
                        <div class="form-group">
                            <label for="touchpad">Touchpad</label><br>
                            <input type="checkbox" name='touchpad' @checked(old('backlight')) id='touchpad'
                                value='1'>
                            <label for="touchpad">Yes</label>
                            @error('touchpad')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="k_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="k_other" name="k_other">{{ old('k_other') }}</textarea>
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
                                value="{{ old('webcam') ?? 'Yes' }}" class="form-control">
                            @error('webcam')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- microphone  --}}
                        <div class="form-group">
                            <label for="microphone" class="col-form-label">Microphone</label>
                            <input id="microphone" type="text" name="microphone" placeholder="Exp:- Yes"
                                value="{{ old('microphone') ?? 'Yes' }}" class="form-control">
                            @error('microphone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- speaker  --}}
                        <div class="form-group">
                            <label for="speaker" class="col-form-label">Speaker</label>
                            <input id="speaker" type="text" name="speaker" placeholder="Exp:- Yes"
                                value="{{ old('speaker') ?? 'Yes' }}" class="form-control">
                            @error('speaker')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="ca_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="ca_other" name="ca_other">{{ old('ca_other') }}</textarea>
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
                                value="{{ old('optical_drive') }}" class="form-control">
                            @error('optical_drive')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- card_reader  --}}
                        <div class="form-group">
                            <label for="card_reader" class="col-form-label">Card Reader </label>
                            <input id="card_reader" type="text" name="card_reader"
                                placeholder="Exp:- SD Media Card Reader" value="{{ old('card_reader') }}"
                                class="form-control">
                            @error('card_reader')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- hdmi_p  --}}
                        <div class="form-group">
                            <label for="hdmi_p" class="col-form-label">HDMI Port </label>
                            <input id="hdmi_p" type="text" name="hdmi_p" placeholder="Exp:- 1x HDMI 1.4b"
                                value="{{ old('hdmi_p') }}" class="form-control">
                            @error('hdmi_p')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- usb2_p  --}}
                        <div class="form-group">
                            <label for="usb2_p" class="col-form-label">USB 2 Port </label>
                            <input id="usb2_p" type="text" name="usb2_p" placeholder="Exp:- 1x USB 2.0 Type-A"
                                value="{{ old('usb2_p') }}" class="form-control">
                            @error('usb2_p')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- usb3_p  --}}
                        <div class="form-group">
                            <label for="usb3_p" class="col-form-label">USB 3 Port </label>
                            <input id="usb3_p" type="text" name="usb3_p"
                                placeholder="Exp:- 1x USB 3.2 Gen 1 Type-A" value="{{ old('usb3_p') }}"
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
                                value="{{ old('type_c_tb_p') }}" class="form-control">
                            @error('type_c_tb_p')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- headphone_p  --}}
                        <div class="form-group">
                            <label for="headphone_p" class="col-form-label">Headphone </label>
                            <input id="headphone_p" type="text" name="headphone_p" placeholder="Exp:- 1x Headphone"
                                value="{{ old('headphone_p') }}" class="form-control">
                            @error('headphone_p')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- microphone_p  --}}
                        <div class="form-group">
                            <label for="microphone_p" class="col-form-label">Microphone </label>
                            <input id="microphone_p" type="text" name="microphone_p"
                                placeholder="Exp:- Microphone Port Combo" value="{{ old('microphone_p') }}"
                                class="form-control">
                            @error('microphone_p')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="ps_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="ps_other" name="ps_other">{{ old('ps_other') }}</textarea>
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
                                value="{{ old('wifi') }}" class="form-control">
                            @error('wifi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- bluetooth  --}}
                        <div class="form-group">
                            <label for="bluetooth" class="col-form-label">Bluetooth </label>
                            <input id="bluetooth" type="text" name="bluetooth" placeholder="Exp:- Bluetooth 5.0"
                                value="{{ old('bluetooth') }}" class="form-control">
                            @error('bluetooth')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="nc_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="nc_other" name="nc_other">{{ old('nc_other') }}</textarea>
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
                                value="{{ old('finger_print') }}" class="form-control">
                            @error('finger_print')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- facelock  --}}
                        <div class="form-group">
                            <label for="facelock" class="col-form-label">Facelock</label>
                            <input id="facelock" type="text" name="facelock" placeholder="Exp:- Yes/No"
                                value="{{ old('facelock') }}" class="form-control">
                            @error('facelock')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    {{-- Other's information --}}
                    <div class="form-group">
                        <label for="s_other" class="col-form-label">Others</label>
                        <textarea class="form-control" id="s_other" name="s_other">{{ old('s_other') }}</textarea>
                        @error('s_other')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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
                                placeholder="Exp:- Windows" value="{{ old('operating_system') }}" class="form-control">
                            @error('operating_system')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="soft_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="soft_other" name="soft_other">{{ old('soft_other') }}</textarea>
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
                                placeholder="Exp:- 3 Cell Li-ion" value="{{ old('battery_type') }}"
                                class="form-control">
                            @error('battery_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- battery_capacity  --}}
                        <div class="form-group">
                            <label for="battery_capacity" class="col-form-label">Battery Capacity </label>
                            <input id="battery_capacity" type="text" name="battery_capacity"
                                placeholder="Exp:- 42Whr" value="{{ old('battery_capacity') }}" class="form-control">
                            @error('battery_capacity')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- adapter_type  --}}
                        <div class="form-group">
                            <label for="adapter_type" class="col-form-label">Adapter Type </label>
                            <input id="adapter_type" type="text" name="adapter_type"
                                placeholder="Exp:- 65W Round Tip(3-pin)" value="{{ old('adapter_type') }}"
                                class="form-control">
                            @error('adapter_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="power_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="power_other" name="power_other">{{ old('power_other') }}</textarea>
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
                                value="{{ old('color') }}" class="form-control">
                            @error('color')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- dimension  --}}
                        <div class="form-group">
                            <label for="dimension" class="col-form-label">Dimension </label>
                            <input id="dimension" type="text" name="dimension"
                                placeholder="Exp:- 325.3 x 216.5 x 17.9 mm" value="{{ old('dimension') }}"
                                class="form-control">
                            @error('dimension')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- weight  --}}
                        <div class="form-group">
                            <label for="weight" class="col-form-label">Weight </label>
                            <input id="weight" type="text" name="weight" placeholder="Exp:- 1.58 kg"
                                value="{{ old('weight') }}" class="form-control">
                            @error('weight')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Other's information --}}
                        <div class="form-group">
                            <label for="physi_other" class="col-form-label">Others</label>
                            <textarea class="form-control" id="physi_other" name="physi_other">{{ old('physi_other') }}</textarea>
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
                                placeholder="2 months" value="{{ old('replacement_warranty') }}" class="form-control">
                            @error('replacement_warranty')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- motherboard_warranty  --}}
                        <div class="form-group">
                            <label for="motherboard_warranty" class="col-form-label">Motherboard Warranty</label>
                            <input id="motherboard_warranty" type="text" name="motherboard_warranty"
                                placeholder="1 year" value="{{ old('motherboard_warranty') }}" class="form-control">
                            @error('motherboard_warranty')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- service_warranty  --}}
                        <div class="form-group">
                            <label for="service_warranty" class="col-form-label">Service Warranty</label>
                            <input id="service_warranty" type="text" name="service_warranty" placeholder="Lifetime"
                                value="{{ old('service_warranty') }}" class="form-control">
                            @error('service_warranty')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- disclaimer  --}}
                        <div class="form-group">
                            <label for="disclaimer" class="col-form-label">Disclaimer</label>
                            <input id="disclaimer" type="text" name="disclaimer" placeholder=""
                                value="{{ old('disclaimer') }}" class="form-control">
                            @error('disclaimer')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- note  --}}
                        <div class="form-group">
                            <label for="note" class="col-form-label">Note</label>
                            <input id="note" type="text" name="note" placeholder=""
                                value="{{ old('note') }}" class="form-control">
                            @error('note')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- w_details  --}}
                        <div class="form-group">
                            <label for="w_details" class="col-form-label">Other Warranty</label>
                            <input id="w_details" type="text" name="w_details"
                                placeholder="Exp:- 2 years warranty (Battery adapter 1 year)"
                                value="{{ old('w_details') }}" class="form-control">
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
                                <option value="">Choose a duration</option>
                                @foreach ($durations as $duration)
                                    <option value="{{ $duration->id }}" @selected($duration->id == old('durations'))>
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
                            value="{{ old('photo') }}">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status" class="col-form-label">Status </label>
                    <select name="status" class="form-control">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3 form-group">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        #div_lunch_date {
            display: none;
        }

        #div_product_offer {
            display: none;
        }
        .h-6 {
            height: 32px;
        }
    </style>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <link rel="stylesheet" href="{{ asset('backend/summernote/summernote-lite.css') }}">
@endpush
@push('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('backend/summernote/summernote-lite.js') }}"></script>

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
            });

            $('#isOfferToggler').on('click', function() {
                $('#div_product_offer').toggle();
            });
            $('#price').on('keyup', function() {
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

                $('#final_price').val(final_price);
                $('#final_price_div').show();
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
                            // console.log(response);
                            var html_option =
                                "<option value=''>----Select sub category----</option>"
                            if (response.status) {
                                var data = response.data;
                                // alert(data);
                                if (response.data) {
                                    $('#child_cat_div').removeClass('d-none');
                                    $.each(data, function(id, title) {
                                        html_option += "<option value='" + id + "'>" +
                                            title +
                                            "</option>"
                                    });
                                } else {}
                            } else {
                                $('#child_cat_div').addClass('d-none');
                            }
                            $('#child_cat_id').html(html_option);
                        }
                    });
                } else {}
            });

        });
    </script>
@endpush
