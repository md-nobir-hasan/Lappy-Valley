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
                    <label for="inputTitle" class="col-form-label">Ram (GB) <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="number" name="ram" placeholder="Enter RAM as GB"
                        value="{{ old('ram') }}" class="form-control">
                    @error('ram')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Type <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="type" placeholder="Enter type of RAM"
                        value="{{ old('type') }}" class="form-control">
                    @error('type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Bus Speed <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="number" name="bus_speed" placeholder="Enter bus speed"
                        value="{{ old('bus_speed') }}" class="form-control">
                    @error('bus_speed')
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
