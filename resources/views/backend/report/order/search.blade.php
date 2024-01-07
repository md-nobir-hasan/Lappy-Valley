@extends('backend.layouts.master')
@push('title')
    Order Report Date Wise Search
@endpush
@section('main-content')
    <div class="card">
        <h5 class="card-header">Date Wise Search</h5>
        <div class="card-body">
            <form method="post" action="{{ route('report.order.datewise') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputTitle" class="col-form-label">From <span class="text-danger">*</span></label>
                            <input id="inputTitle" type="date" name="from" placeholder="Enter from"
                                value="{{ old('from') }}" class="form-control">
                            @error('from')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputTitle" class="col-form-label">To <span class="text-danger">*</span></label>
                            <input id="inputTitle" type="date" name="to" placeholder="Enter To"
                                value="{{ old('to') }}" class="form-control">
                            @error('to')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-3 mb-3 text-center mt- form-group">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/summernote/summernote-lite.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush
@push('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="{{ asset('backend/summernote/summernote-lite.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <script>
        $('#lfm').filemanager('image');

        $(document).ready(function() {
            $('#summary').summernote({
                placeholder: "Write short description.....",
                tabsize: 2,
                height: 100
            });
        });

        $(document).ready(function() {
            $('#description').summernote({
                placeholder: "Write detail description.....",
                tabsize: 2,
                height: 150
            });
        });

        $(document).ready(function() {
            $('#quote').summernote({
                placeholder: "Write detail Quote.....",
                tabsize: 2,
                height: 100
            });
        });
        // $('select').selectpicker();
    </script>
@endpush
