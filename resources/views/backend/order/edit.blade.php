@extends('backend.layouts.master')
@push('title')
    Edit Order
@endpush
@section('title', 'Order Detail')

@section('main-content')
    <div class="card">
        <h5 class="card-header">Order Edit</h5>
        <div class="card-body">
            <form action="{{ route('order.update', $order->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="status">Status :</label>
                    <select name="order_status_id" id="" class="form-control">
                        @foreach ($order_status as $item)
                            <option value="{{ $item->id }}" @checked($order->order_status_id == $item->id)>{{ $item->title }}</option>
                        @endforeach
                    </select>
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
