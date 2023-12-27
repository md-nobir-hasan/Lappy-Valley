<?php

namespace App\Http\Controllers;

use App\Models\RecentViewedProduct;
use App\Http\Requests\StoreRecentViewedProductRequest;
use App\Http\Requests\UpdateRecentViewedProductRequest;

class RecentViewedProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecentViewedProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RecentViewedProduct $recentViewedProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RecentViewedProduct $recentViewedProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecentViewedProductRequest $request, RecentViewedProduct $recentViewedProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RecentViewedProduct $recentViewedProduct)
    {
        //
    }
}
