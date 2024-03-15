@extends('backend.layouts.master')
@push('title')
    Add RAM
@endpush
{{-- @section('title', 'E-SHOP || RAM Create') --}}
@section('main-content')
    <div class="card">
        <h5 class="card-header">Add RAM</h5>
        <div class="card-body">
            <form method="post" action="{{ route('pa.ram.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="capacity" class="col-form-label">Ram (GB) <span class="text-danger">*</span></label>
                    <input id="capacity" type="number" name="capacity" placeholder="Enter capacity as GB"
                        value="{{ old('capacity') }}" class="form-control">
                    @error('capacity')
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
