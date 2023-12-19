@extends('backend.layouts.master')
@push('title')
    Add Duration
@endpush
@section('main-content')

    <div class="card">
        <h5 class="card-header">Add Duration</h5>
        <div class="card-body">
            <form method="post" action="{{ route('duration.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="year" class="col-form-label">Years <span class="text-danger">*</span></label>
                    <input id="year" type="number" step="1" name="year" placeholder="Enter year" value="{{ old('year') }}"
                        class="form-control">
                    @error('year')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="month" class="col-form-label">Months <span class="text-danger">*</span></label>
                    <input id="month" type="number" step="1" name="month" placeholder="Enter Months" value="{{ old('month') }}"
                        class="form-control">
                    @error('month')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/summernote/summernote-lite.css') }}">
@endpush
@push('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="{{ asset('backend/summernote/summernote-lite.js') }}"></script>
    <script>
        $('#lfm').filemanager('image');

        $(document).ready(function() {
            $('#description').summernote({
                placeholder: "Write short description.....",
                tabsize: 2,
                height: 150
            });
        });
    </script>
@endpush
