@extends('backend.layouts.master')
@push('title')
    Update Pixel
@endpush
@section('main-content')
    <div class="card">
        <h5 class="card-header">Update Pixel</h5>
        <div class="card-body">
            <form method="post" action="{{ route('seo.pixel.update',$datum->id) }}">
                {{ csrf_field() }}
                @method('PUT')
                 <div class="form-group">
                    <label for="header" class="col-form-label">Header Tag <span class="text-danger">*</span></label>
                    <input id="header" type="text" name="header" placeholder="Enter Header Tag"
                        value="{{$datum->header}}" class="form-control">
                    @error('header')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="footer" class="col-form-label">Footer Tag <span class="text-danger">*</span></label>
                    <input id="footer" type="text" name="footer" placeholder="Enter footer Tag"
                        value="{{$datum->footer}}" class="form-control">
                    @error('footer')
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
