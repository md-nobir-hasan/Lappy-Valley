@extends('backend.layouts.master')
@push('title')
    Update Display Size
@endpush
{{-- @section('title', 'E-SHOP || Display Size Create') --}}
@section('main-content')
    <div class="card">
        <h5 class="card-header">Update Display Size</h5>
        <div class="card-body">
            <form method="post" action="{{ route('pa.display-size.update',$datum->id) }}">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Size (inch)<span class="text-danger">*</span></label>
                    <input id="inputTitle" step=".1" type="number" name="size" placeholder="Enter display size"
                        value="{{$datum->size}}" class="form-control">
                    @error('size')
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
