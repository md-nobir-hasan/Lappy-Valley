@extends('backend.layouts.master')
@push('title')
    Edit Reviews
@endpush
@section('title', 'Review Edit')

@section('main-content')
    <div class="card">
        <h5 class="card-header">Review Edit</h5>
        <div class="card-body">
            @if ($errors->any())
@dd($errors->all())
            @endif
            <form action="{{ route('review.update', $review->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Review By:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $review->name }}">
                    @error('name')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" class="form-control" value="{{ $review->subject }}">
                    @error('subject')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="msg">Message</label>
                    <textarea name="msg" id="" cols="20" rows="10" class="form-control">{{ $review->msg }}</textarea>
                    @error('msg')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="status">Status :</label>
                    <select name="status" id="" class="form-control">
                        <option value="">--Select Status--</option>
                        <option value="active" {{ $review->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $review->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .order-info,
        .shipping-info {
            background: #ECECEC;
            padding: 20px;
        }

        .order-info h4,
        .shipping-info h4 {
            text-decoration: underline;
        }
    </style>
@endpush
