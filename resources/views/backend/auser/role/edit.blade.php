@extends('backend.layouts.master')
@push('title')
    Update Role
@endpush
@section('title', 'E-SHOP || Role Create')
@section('main-content')

    <div class="card">
        <h5 class="card-header">Update Role</h5>
        <div class="card-body">
            <form method="post" action="{{ route('auser.role.update',[$role->id]) }}">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Name <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="name" placeholder="Enter a role name"
                        value="{{ $role->name }}" class="form-control">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    @foreach ($permissions->chunk(4) as $permis4)
                    <div class="col-6 col-md-3 col-lg-2 card-body">
                    @foreach ($permis4 as $prm)
                        <div class="form-check">
                            <input name="permissions[]" @checked($prm->hasrole($role->name)) class="form-check-input" type="checkbox" value="{{ $prm->name }}"
                                id="permission{{ $prm->id }}">
                            <label class="form-check-label" for="permission{{ $prm->id }}">
                                {{ $prm->name }}
                            </label>
                        </div>
                    @endforeach
                    </div>

                    @endforeach
                </div>
                <div class="mb-3 form-group">
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
