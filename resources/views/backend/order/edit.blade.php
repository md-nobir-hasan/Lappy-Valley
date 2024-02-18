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
                    <label for="payment_status">Payment Status :</label>
                    <select name="payment_status" id="payment_status" class="form-control">
                        <option value="paid" @selected($order->payment_status == 'paid')>paid</option>
                        <option value="unpaid" @selected($order->payment_status == 'unpaid')>uppaid</option>
                    </select>
                    @error('payment_status')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="order_status_id">Status :</label>
                    <select name="order_status_id" id="order_status_id" class="form-control">
                        @foreach ($order_status as $item)
                            <option value="{{ $item->title }}" @selected($order->status == $item->title)>{{ $item->title }}</option>
                        @endforeach
                    </select>
                    @error('order_status_id')
                    <span class="text-danger">{{$message}}</span>
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
