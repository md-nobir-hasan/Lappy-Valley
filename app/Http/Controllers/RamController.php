<?php

namespace App\Http\Controllers;

use App\Models\Ram;
use App\Http\Requests\StoreRamRequest;
use App\Http\Requests\UpdateRamRequest;

class RamController extends Controller
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
    public function store(StoreRamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ram $ram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ram $ram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRamRequest $request, Ram $ram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ram $ram)
    {
        //
    }
}
