<?php

namespace App\Http\Controllers;

use App\Models\Ram;
use App\Http\Requests\StoreRamRequest;
use App\Http\Requests\UpdateRamRequest;

class RamController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show RAM']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = Ram::paginate(10);
        $n['count'] = Ram::get();
        return view('backend.product-attribute.ram.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->ccan('Create RAM');
        return view('backend.product-attribute.ram.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRamRequest $request)
    {
        $this->ccan('Create RAM');

        Ram::create($request->all());
        return redirect()->route('pa.ram.index')->with('success', "$request->name is created successfully");
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
        $this->ccan('Edit RAM');

        $n['datum'] =$ram;
        return view('backend.product-attribute.ram.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRamRequest $request, Ram $ram)
    {
        $this->ccan('Edit RAM');

       $ram->update($request->all());
        return redirect()->route('pa.ram.index')->with('success', "$request->name is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ram $ram)
    {
        $this->ccan('Delete RAM');

        $status =$ram->delete();

        if ($status) {
            request()->session()->flash('success', 'RAM successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting RAM');
        }
        return back();
    }
}
