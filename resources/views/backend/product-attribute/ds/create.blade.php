@extends('backend.layouts.master')
@push('title')
    Add Display Size
@endpush
{{-- @section('title', 'E-SHOP || Display Size Create') --}}
@section('main-content')
    <div class="card">
        <h5 class="card-header">Add Display Size</h5>
        <div class="card-body">
            <form method="post" action="{{ route('pa.display-size.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">From (inch)<span class="text-danger">*</span></label>
                    <input id="inputTitle" step=".1" type="number" name="from" placeholder="Enter Display Size"
                        value="{{ old('from') }}" class="form-control">
                    @error('from')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">To (inch)<span class="text-danger">*</span></label>
                    <input id="inputTitle" step=".1" type="number" name="to" placeholder="Enter Display Size"
                        value="{{ old('to') }}" class="form-control">
                    @error('to')
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
