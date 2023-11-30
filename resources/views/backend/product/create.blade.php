@extends('backend.layouts.master')
@push('title')
    Add Product
@endpush
@section('main-content')
    <div class="card">
        <h5 class="card-header">Add Product</h5>
        <div class="card-body">
            {{-- @if ($errors) --}}

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- @endif --}}
            <form method="post" action="{{ route('product.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="title" placeholder="Enter title"
                        value="{{ old('title') }}" class="form-control">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="model" class="col-form-label">Model <span class="text-danger">*</span></label>
                    <input id="model" type="text" name="model" placeholder="Enter Model"
                        value="{{ old('model') }}" class="form-control">
                    @error('model')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="summary" class="col-form-label">Summary <span class="text-danger">*</span></label>
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
                    <label for="is_featured">Is Featured</label><br>
                    <input type="checkbox" name='is_featured' @checked(old('is_featured')) id='is_featured' value='1'>
                    Yes
                </div>

                <div class="form-group">
                    <label for="upcomming_toggler">Up Comming</label><br>
                    <input type="checkbox" name='upcomming_toggler' @checked(old('upcomming_toggler')) id='upcomming_toggler' value='1'> Yes
                    <div class="ml-3" id="div_lunch_date">
                        <label for="upcomming" class="col-form-label">Product Lunch Date <span
                                class="text-danger">*</span></label>
                        <input id="upcomming" type="date" name="upcomming" placeholder="Enter Product Lunch Date"
                            value="{{ old('upcomming') }}" class="form-control">
                        @error('upcomming')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                {{-- {{$categories}} --}}

                <div class="form-group">
                    <label for="cat_id">Category <span class="text-danger">*</span></label>
                    <select name="cat_id" id="cat_id" class="form-control">
                        <option value="">--Select any category--</option>
                        @foreach ($categories as $key => $cat_data)
                            <option value='{{ $cat_data->id }}'>{{ $cat_data->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group d-none" id="child_cat_div">
                    <label for="child_cat_id">Sub Category</label>
                    <select name="child_cat_id" id="child_cat_id" class="form-control">
                        <option value="">--Select any category--</option>
                        {{-- @foreach ($parent_cats as $key => $parent_cat)
                  <option value='{{$parent_cat->id}}'>{{$parent_cat->title}}</option>
              @endforeach --}}
                    </select>
                </div>

                <div class="form-group">
                    <label for="price" class="col-form-label">Price(BDT) <span class="text-danger">*</span></label>
                    <input id="price" type="number" name="price" placeholder="Enter price"
                        value="{{ old('price') }}" class="form-control">
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="discount" class="col-form-label">Discount(%)</label>
                    <input id="discount" type="number" name="discount" min="0" max="100"
                        placeholder="Enter discount" value="{{ old('discount') }}" class="form-control">
                    @error('discount')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="processor_generation_id">Prosessor Generation </label>
                    <select name="processor_generation_id" class="form-control" id="processor_generation_id">
                        <option value="" hidden>Choose....</option>
                        @foreach ($p_generations as $pg)
                            <option value="{{ $pg->id }}" @selected($pg->id == old('processor_generation_id'))>{{ $pg->name }}</option>
                        @endforeach
                    </select>
                    @error('processor_generation_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="processor_model_id">Prosessor Model </label>
                    <select name="processor_model_id" class="form-control" id="processor_model_id">
                        <option value="" hidden>Choose....</option>
                        @foreach ($p_models as $pm)
                            <option value="{{ $pm->id }}" @selected($pm->id == old('processor_model_id'))>{{ $pm->name }}</option>
                        @endforeach
                    </select>
                    @error('processor_model_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="display_size_id">Display Size </label>
                    <select name="display_size_id" class="form-control" id="display_size_id">
                        <option value="" hidden>Choose....</option>
                        @foreach ($d_sizes as $ds)
                            <option value="{{ $ds->id }}" @selected($ds->id == old('display_size_id'))>{{ $ds->from }} to
                                {{ $ds->to }} inch</option>
                        @endforeach
                    </select>
                    @error('display_size_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="display_type_id">Display Type </label>
                    <select name="display_type_id" class="form-control" id="display_type_id">
                        <option value="" hidden>Choose....</option>
                        @foreach ($d_types as $dt)
                            <option value="{{ $dt->id }}" @selected($dt->id == old('display_type_id'))>{{ $dt->name }}</option>
                        @endforeach
                    </select>
                    @error('display_type_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="ram_id">RAM </label>
                    <select name="ram_id" class="form-control" id="ram_id">
                        <option value="" hidden>Choose....</option>
                        @foreach ($rams as $ram)
                            <option value="{{ $ram->id }}" @selected($ram->id == old('ram_id'))>{{ $ram->name }}</option>
                        @endforeach
                    </select>
                    @error('ram_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="ssd_id">SSD </label>
                    <select name="ssd_id" class="form-control" id="ssd_id">
                        <option value="" hidden>Choose....</option>
                        @foreach ($ssds as $ssd)
                            <option value="{{ $ssd->id }}" @selected($ssd->id == old('ssd_id'))>{{ $ssd->name }}</option>
                        @endforeach
                    </select>
                    @error('ssd_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="hdd_id">HDD </label>
                    <select name="hdd_id" class="form-control" id="hdd_id">
                        <option value="" hidden>Choose....</option>
                        @foreach ($hdds as $hdd)
                            <option value="{{ $hdd->id }}" @selected($hdd->id == old('hdd_id'))>{{ $hdd->name }}</option>
                        @endforeach
                    </select>
                    @error('hdd_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="graphic_id">Graphic </label>
                    <select name="graphic_id" class="form-control" id="graphic_id">
                        <option value="" hidden>Choose....</option>
                        @foreach ($graphics as $graphic)
                            <option value="{{ $graphic->id }}" @selected($graphic->id == old('graphic_id'))>{{ $graphic->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('graphic_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="speacial_feature">Special Features </label>
                    <select name="special_feature[]" class="form-control selectpicker" id="speacial_feature" multiple>
                        <option value="" hidden>Choose....</option>
                        @foreach ($special_features as $sp)
                            <option value="{{ $sp->name }}" @selected($sp->id == old('speacial_feature'))>{{ $sp->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('speacial_feature')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                {{-- <div class="form-group">
                    <label for="size">Size</label>
                    <select name="size[]" class="form-control selectpicker" multiple data-live-search="true">
                        <option value="">--Select any size--</option>
                        <option value="S">Small (S)</option>
                        <option value="M">Medium (M)</option>
                        <option value="L">Large (L)</option>
                        <option value="XL">Extra Large (XL)</option>
                    </select>
                </div> --}}

                <div class="form-group">
                    <label for="brand_id">Brand</label>
                    {{-- {{$brands}} --}}

                    <select name="brand_id" class="form-control">
                        <option value="">--Select Brand--</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" @selected($brand->id == old('brand_id'))>{{ $brand->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- <div class="form-group">
                    <label for="condition">Condition</label>
                    <select name="condition" class="form-control">
                        <option value="">--Select Condition--</option>
                        <option value="default" >Default</option>
                        <option value="new">New</option>
                        <option value="hot">Hot</option>
                    </select>
                </div> --}}

                <div class="form-group">
                    <label for="stock">Quantity <span class="text-danger">*</span></label>
                    <input id="quantity" type="number" name="stock" min="0" placeholder="Enter quantity"
                        value="{{ old('stock') }}" class="form-control">
                    @error('stock')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
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
                    <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
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
   #div_lunch_date{
    display: none;
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
                //  show = true;

            });
        });


        // $('select').selectpicker();
    </script>

    <script>
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
                        var html_option = "<option value=''>----Select sub category----</option>"
                        if (response.status) {
                            var data = response.data;
                            // alert(data);
                            if (response.data) {
                                $('#child_cat_div').removeClass('d-none');
                                $.each(data, function(id, title) {
                                    html_option += "<option value='" + id + "'>" + title +
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
        })
    </script>
@endpush
