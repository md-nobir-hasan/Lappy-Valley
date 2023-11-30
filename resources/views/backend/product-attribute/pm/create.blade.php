@extends('backend.layouts.master')
@push('title')
    Add Processor Model
@endpush
{{-- @section('title', 'E-SHOP || Processor Model Create') --}}
@section('main-content')
    <div class="card">
        <h5 class="card-header">Add Processor Model</h5>
        <div class="card-body">
            <form method="post" action="{{ route('pa.processor-model.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Name <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="name" placeholder="Enter Name of Processor Model"
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
