<?php

namespace App\Http\Controllers;

use App\Models\ProductOffer;
use App\Http\Requests\StoreProductOfferRequest;
use App\Http\Requests\UpdateProductOfferRequest;

class ProductOfferController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show Product Offer']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = ProductOffer::paginate(10);
        $n['count'] = ProductOffer::get();
        return view('backend.product-attribute.product-offer.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->ccan('Create Product Offer');
        return view('backend.product-attribute.product-offer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductOfferRequest $request)
    {
        $this->ccan('Create Product Offer');

        ProductOffer::create($request->all());
        return redirect()->route('pa.product-offers.index')->with('success', "$request->name is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductOffer $productOffer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductOffer $productOffer)
    {
        $this->ccan('Edit Product Offer');

        $n['datum'] = $productOffer;
        return view('backend.product-attribute.product-offer.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductOfferRequest $request, ProductOffer $productOffer)
    {
        $this->ccan('Edit Product Offer');

        $productOffer->update($request->all());
        return redirect()->route('pa.product-offers.index')->with('success', "$request->name is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductOffer $productOffer)
    {
        $this->ccan('Delete Product Offer');

        $status = $productOffer->delete();

        if ($status) {
            request()->session()->flash('success', 'RAM successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting Product Offer');
        }
        return back();
    }
}
