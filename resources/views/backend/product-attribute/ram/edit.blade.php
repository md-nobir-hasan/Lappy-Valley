@extends('backend.layouts.master')
@push('title')
    Update RAM
@endpush
{{-- @section('title', 'E-SHOP || RAM Create') --}}
@section('main-content')
    <div class="card">
        <h5 class="card-header">Update RAM</h5>
        <div class="card-body">
            <form method="post" action="{{ route('pa.ram.update',$datum->id) }}">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Ram (GB) <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="number" name="ram" placeholder="Enter title"
                        value="{{$datum->ram}}" class="form-control">
                    @error('ram')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Type <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="type" placeholder="Enter title"
                        value="{{$datum->type}}" class="form-control">
                    @error('type')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Bus Speed <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="number" name="bus_speed" placeholder="Enter title"
                        value="{{$datum->bus_speed}}" class="form-control">
                    @error('bus_speed')
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
