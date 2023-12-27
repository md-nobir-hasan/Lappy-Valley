<?php

namespace App\Http\Controllers;

use App\Models\OrderStatus;
use App\Http\Requests\StoreOrderStatusRequest;
use App\Http\Requests\UpdateOrderStatusRequest;
use Stringable;

class OrderStatusController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show Order Status']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->ccan('Show Order Status');

        $n['order_status'] = OrderStatus::orderBy('id', 'DESC')->paginate();
        $n['count'] = OrderStatus::get();
        return view('backend.order-status.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->ccan('Create Order Status');

        return view('backend.order-status.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderStatusRequest $request)
    {
        $this->ccan('Create Order Status');

        $data = $request->all();
        $slug = Stringable::slug($request->title);
        $count = OrderStatus::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        // return $data;
        $status = OrderStatus::create($data);
        if ($status) {
            request()->session()->flash('success', 'Order Status successfully created');
        } else {
            request()->session()->flash('error', 'Error, Please try again');
        }
        return redirect()->route('order-status.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderStatus $orderStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderStatus $orderStatus)
    {
        $this->ccan('Edit Order Status');

        if (!$orderStatus) {
            request()->session()->flash('error', 'Brand not found');
        }
        return view('backend.order-status.edit')->with('data', $orderStatus);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderStatusRequest $request, OrderStatus $orderStatus)
    {
        $this->ccan('Edit Order Status');

        $data = $request->all();

        $status = $orderStatus->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Order Status successfully updated');
        } else {
            request()->session()->flash('error', 'Error, Please try again');
        }
        return redirect()->route('order-status.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderStatus $orderStatus)
    {
        $this->ccan('Delete Order Status');
        if ($orderStatus) {
            $status = $orderStatus->delete();
            if ($status) {
                request()->session()->flash('success', 'Order Status successfully deleted');
            } else {
                request()->session()->flash('error', 'Error, Please try again');
            }
            return redirect()->route('order-status.index');
        } else {
            request()->session()->flash('error', 'Order Status not found');
            return redirect()->back();
        }
    }
}
