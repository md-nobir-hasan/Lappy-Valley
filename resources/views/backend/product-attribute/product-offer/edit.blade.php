@extends('backend.layouts.master')
@push('title')
    Update Offer
@endpush
@section('main-content')
    <div class="card">
        <h5 class="card-header">Update Offer</h5>
        <div class="card-body">
            <form method="post" action="{{ route('pa.product-offers.update',[ $datum->id]) }}">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group">
                    <label for="title" class="col-form-label">Name <span class="text-danger">*</span></label>
                    <input id="title" type="text" name="title" placeholder="Enter title of Offer"
                        value="{{ $datum->title }}" class="form-control">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="des" class="col-form-label">Short Info</label>
                    <input id="des" type="text" name="des" placeholder="Enter Short Info about Offer"
                        value="{{ $datum->des }}" class="form-control">
                    @error('des')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="dis" class="col-form-label">Discount <span class="text-danger">*</span></label>
                    <input id="dis" type="number" name="dis" placeholder="Enter discount of Offer"
                        value="{{ $datum->dis }}" class="form-control">
                    @error('dis')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="from" class="col-form-label">Offer start from</label>
                    <input id="from" type="date" name="from" placeholder="Offer start from"
                        value="{{ $datum->from }}" class="form-control">
                    @error('from')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="to" class="col-form-label">Offer start to <span class="text-danger">*</span></label>
                    <input id="to" type="date" name="to" placeholder="Offer start to"
                        value="{{ $datum->to }}" class="form-control">
                    @error('to')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="type" class="col-form-label">Type <span class="text-danger">*</span></label>
                    <input id="type" type="text" name="type" placeholder="Exp:- Online/Offline/From Shop"
                        value="{{ $datum->type }}" class="form-control">
                    @error('type')
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
