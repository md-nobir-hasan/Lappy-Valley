@extends('backend.layouts.master')
@push('title')
    Others Settings
@endpush
@section('main-content')

<div class="card">
    <h5 class="card-header">Edit Others setting</h5>
    <div class="card-body">
    <form method="post" action="{{route('setting.os.update')}}">
        @csrf

        <div class="form-group">
          <label for="new_product" class="col-form-label">New Product's Time (How many days after adding the product)<span class="text-danger">*</span></label>
          <input type="number" class="form-control" name="new_product" required value="{{$data?->new_product}}">
          @error('new_product')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="popular_product" class="col-form-label">Propular Product's limit (How many products you want to show according to their popularity)<span class="text-danger">*</span></label>
          <input type="number" class="form-control" name="popular_product" required value="{{$data?->popular_product}}">
          @error('popular_product')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="most_viewed_product" class="col-form-label">Most Viewed Product's limit (How many products you want to show  according to their views)<span class="text-danger">*</span></label>
          <input type="number" class="form-control" name="most_viewed_product" required value="{{$data?->most_viewed_product}}">
          @error('most_viewed_product')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="mb-3 form-group">
           <button class="btn btn-success" type="submit">Update</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote-lite.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote-lite.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
    $('#lfm').filemanager('image');
    $('#lfm1').filemanager('image');
    $(document).ready(function() {
    $('#summary').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });

    $(document).ready(function() {
      $('#quote').summernote({
        placeholder: "Write short Quote.....",
          tabsize: 2,
          height: 100
      });
    });
    $(document).ready(function() {
      $('#description').summernote({
        placeholder: "Write detail description.....",
          tabsize: 2,
          height: 150
      });
    });
</script>
@endpush
