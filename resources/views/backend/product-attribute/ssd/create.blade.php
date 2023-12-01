@extends('backend.layouts.master')
@push('title')
    Add SSD
@endpush
{{-- @section('title', 'E-SHOP || SSD Create') --}}
@section('main-content')
    <div class="card">
        <h5 class="card-header">Add SSD</h5>
        <div class="card-body">
            <form method="post" action="{{ route('pa.ssd.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Name <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="name" placeholder="Enter Name of SSD"
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
