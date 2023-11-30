@extends('backend.layouts.master')
@push('title')
    Add Display Size
@endpush
{{-- @section('title', 'E-SHOP || Display Size Create') --}}
@section('main-content')
    <div class="card">
        <h5 class="card-header">Add Display Size</h5>
        <div class="card-body">
            <form method="post" action="{{ route('pa.diaplay-size.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Name <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="name" placeholder="Enter Name of Display Size"
                        value="{{ old('name') }}" class="form-control">
                    @error('name')
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
