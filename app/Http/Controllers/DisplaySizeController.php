<?php

namespace App\Http\Controllers;

use App\Models\DisplaySize;
use App\Http\Requests\StoreDisplaySizeRequest;
use App\Http\Requests\UpdateDisplaySizeRequest;

class DisplaySizeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show Display Size']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = DisplaySize::orderBy('id','desc')->paginate(10);
        $n['count'] = DisplaySize::get();
        return view('backend.product-attribute.ds.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->ccan('Create Display Size');
        return view('backend.product-attribute.ds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDisplaySizeRequest $request)
    {
        $this->ccan('Create Display Size');

        DisplaySize::create($request->all());
        return redirect()->route('pa.display-size.index')->with('success', "$request->name is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(DisplaySize $displaySize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DisplaySize $displaySize)
    {
        $this->ccan('Edit Display Size');

        $n['datum'] = $displaySize;
        return view('backend.product-attribute.ds.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDisplaySizeRequest $request, DisplaySize $displaySize)
    {
        $this->ccan('Edit Display Size');

        $displaySize->update($request->all());
        return redirect()->route('pa.display-size.index')->with('success', "$request->name is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DisplaySize $displaySize)
    {
        $this->ccan('Delete Display Size');

        $status = $displaySize->delete();

        if ($status) {
            request()->session()->flash('success', 'Display Size successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting Display Size');
        }
        return back();
    }
}
