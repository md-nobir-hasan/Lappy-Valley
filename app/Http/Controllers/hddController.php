<?php

namespace App\Http\Controllers;

use App\Models\hdd;
use App\Http\Requests\StorehddRequest;
use App\Http\Requests\UpdatehddRequest;

class hddController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show HDD']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = hdd::paginate(10);
        $n['count'] = hdd::get();
        return view('backend.product-attribute.hdd.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->ccan('Create HDD');
        return view('backend.product-attribute.hdd.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorehddRequest $request)
    {
        $this->ccan('Create HDD');

        hdd::create($request->all());
        return redirect()->route('pa.hdd.index')->with('success', "$request->name is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(hdd $hdd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hdd $hdd)
    {
        $this->ccan('Edit HDD');

        $n['datum'] = $hdd;
        return view('backend.product-attribute.hdd.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatehddRequest $request, hdd $hdd)
    {
        $this->ccan('Edit HDD');

        $hdd->update($request->all());
        return redirect()->route('pa.hdd.index')->with('success', "$request->name is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hdd $hdd)
    {
        $this->ccan('Delete HDD');

        $status = $hdd->delete();

        if ($status) {
            request()->session()->flash('success', 'HDD successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting HDD');
        }
        return back();
    }
}
