@extends('backend.layouts.master')
@push('title')
    Add Offer
@endpush

@section('main-content')
    <div class="card">
        <h5 class="card-header">Add Offer</h5>
        <div class="card-body">
            <form method="post" action="{{ route('pa.product-offers.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title" class="col-form-label">Name <span class="text-danger">*</span></label>
                    <input id="title" type="text" name="title" placeholder="Enter title of Offer"
                        value="{{ old('title') }}" class="form-control">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="des" class="col-form-label">Short Info</label>
                    <input id="des" type="text" name="des" placeholder="Enter Short Info about Offer"
                        value="{{ old('des') }}" class="form-control">
                    @error('des')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="dis" class="col-form-label">Discount <span class="text-danger">*</span></label>
                    <input id="dis" type="number" name="dis" placeholder="Enter discount of Offer"
                        value="{{ old('dis') }}" class="form-control">
                    @error('dis')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="from" class="col-form-label">Offer start from</label>
                    <input id="from" type="date" name="from" placeholder="Offer start from"
                        value="{{ old('from') }}" class="form-control">
                    @error('from')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="to" class="col-form-label">Offer start to <span class="text-danger">*</span></label>
                    <input id="to" type="date" name="to" placeholder="Offer start to"
                        value="{{ old('to') }}" class="form-control">
                    @error('to')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                 <div class="form-group">
                    <label for="type" class="col-form-label">Offer Type <span class="text-danger">*</span></label>
                    <input id="type" type="text" name="type" placeholder="Exp:- Online/Offline/From Shop"
                        value="{{ old('type') }}" class="form-control">
                    @error('type')
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
