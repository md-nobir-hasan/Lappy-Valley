@extends('backend.layouts.master')
@push('title')
    Update Display Size
@endpush
{{-- @section('title', 'E-SHOP || Display Size Create') --}}
@section('main-content')
    <div class="card">
        <h5 class="card-header">Update Display Size</h5>
        <div class="card-body">
            <form method="post" action="{{ route('pa.diaplay-size.update',$datum->id) }}">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Name <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="name" placeholder="Enter title"
                        value="{{$datum->name}}" class="form-control">
                    @error('name')
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
