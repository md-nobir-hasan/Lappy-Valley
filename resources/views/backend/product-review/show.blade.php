@extends('backend.layouts.master')

@push('title')
    Product Details
@endpush

@section('main-content')
    <div class="card">
        <div class="card-header" style="display: flex !important ; justify-content: space-between; align-items: center">
            <h2>Product</h2>
            <a href="{{ url()->previous() }}" class="shadow-sm d btn btn-sm btn-primary" style="display: inline-block">
                {{-- <i class="fas fa-download fa-sm text-white-50"></i> --}}
                back</a>
        </div>
        <div class="card-body">
            @if ($review)
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $review->f_name }}</td>
                            <td>{{ $review->l_name }}</td>
                            <td>
                                @if ($review->status == 'active')
                                    <span class="btn badge-success status-update">{{ $review->status }}</span>
                                @else
                                    <span class="btn badge-warning status-update">{{ $review->status }}</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('productreview.edit', $review->id) }}"
                                    class="float-left mr-1 btn btn-primary btn-sm"
                                    style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit"
                                    data-placement="bottom"><i class="fas fa-edit"></i></a>
                                <form method="POST" action="{{ route('productreview.destroy', [$review->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm dltBtn" data-id={{ $review->id }}
                                        style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip"
                                        data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <section class="confirmation_part section_padding">
                    <div class="order_boxes">
                        <div class="row">
                            <div class="col-lg-6 col-lx-4">
                                <div class="order-info">
                                    <h4 class="pb-4 text-center">Product Details</h4>
                                    <table class="table">
                                        <tr class="">
                                            <td>Title</td>
                                            <td> : {{ $review->product->title }}</td>
                                        </tr>
                                        <tr class="">
                                            <td>Model</td>
                                            <td> : {{ $review->product->model }}</td>
                                        </tr>
                                        <tr>
                                            <td>Brand</td>
                                            <td> : {{ $review->product->brand?->title }}</td>
                                        </tr>
                                        <tr class="">
                                            <td>Category</td>
                                            <td> : {{ $review->product->cat_info?->title }}</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>

                            <div class="col-lg-6 col-lx-4">
                                <div>
                                    <div class="shipping-info">
                                        <h4 class="pb-4 text-center">Review Message</h4>
                                        <P>
                                            {{ $review->review }}
                                        </P>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>

                <section class="mt-5">
                    <h1 class="text-center" style="text-decoration: underline">Review's Photos</h1>
                    <div class="text-center">
                        @foreach ($review->images as $pto)
                            <img src="/storage/{{ $pto->img }}"
                                class="mx-auto rounded img-fluid img-thumbnail img-gallery" alt="...">
                        @endforeach
                    </div>
                </section>
            @endif

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

        .img-gallery {
            max-height: 250px;
        }
    </style>
@endpush
@push('scripts')
    <script>
        $('.status-update').on('click', function(e) {
            console.log('I am status update click')
            let This = this;
            $.ajax({
                'method': 'post',
                url: "{{ route('review_status.change') }}",
                data: {
                    id: 1,
                    _token: "{{ csrf_token() }}",
                },
                success: (res) => {
                    console.log(res);
                    if (res == 'inactive') {
                        $(This).text('Inactive');
                        $(This).removeClass('badge-success');
                        $(This).addClass('badge-warning');
                    } else if (res == 'active') {
                        $(This).text('Active');
                        $(This).addClass('badge-success');
                        $(This).removeClass('badge-warning');
                    } else {
                        alert('Something went wrong');
                    }
                }
            })
        })
    </script>
@endpush
