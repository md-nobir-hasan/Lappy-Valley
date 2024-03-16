<div class="form-group">
    <label for="{{$attributes['label_for']}}">{{$attributes['label_title']}} </label>

    <div class="input-group mb-3">
        <select name="{{$attributes['label_for']}}_id" class="exchangable_select form-control" id="{{$attributes['label_for']}}">
            <option value="" hidden>Choose {{$attributes['label_title']}} </option>
            @foreach ($attributes['select_data'] as $sdatum)
                <option value="{{ $sdatum->id }}" @selected($sdatum->id == old($attributes['label_for'].'_id'))>
                    {{-- {{ $sdatum->name }} --}}

                    {{ $sdatum->{$attributes['select_data_echo']} }}
                </option>
            @endforeach
        </select>
        <input  type="text" name="{{$attributes['label_for']}}_name" id="{{$attributes['label_for']}}"
            placeholder="Enter the {{$attributes['label_title']}} name" value="{{ old($attributes['label_for'].'_name') }}"
            class="form-control exchangable_input">

        <div class="input-group-append">
            <button type="button" class="btn btn-success  m-0 p-0 input_instead_select"><svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
                </svg>
            </button>
            <button type="button" class="btn btn-danger m-0 p-0 select_restore"><svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.25 9.75h4.875a2.625 2.625 0 0 1 0 5.25H12M8.25 9.75 10.5 7.5M8.25 9.75 10.5 12m9-7.243V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0c1.1.128 1.907 1.077 1.907 2.185Z" />
                </svg>
            </button>
        </div>
    </div>
    @error($attributes['label_for'].'_id')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    @error($attributes['label_for'].'_name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
