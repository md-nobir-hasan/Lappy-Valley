<?php

namespace App\Http\Controllers;

use App\Models\DisplayType;
use App\Http\Requests\StoreDisplayTypeRequest;
use App\Http\Requests\UpdateDisplayTypeRequest;

class DisplayTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show Display Type']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = DisplayType::paginate(10);
        return view('backend.product-attribute.dt.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->ccan('Create Display Type');

        return view('backend.product-attribute.dt.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDisplayTypeRequest $request)
    {
        $this->ccan('Create Display Type');

        DisplayType::create($request->all());
        return redirect()->route('pa.display-type.index')->with('success', "$request->name is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(DisplayType $displayType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DisplayType $displayType)
    {
        $this->ccan('Edit Display Type');

        $n['datum'] = $displayType;
        return view('backend.product-attribute.dt.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDisplayTypeRequest $request, DisplayType $displayType)
    {
        $this->ccan('Edit Display Type');

        $displayType->update($request->all());
        return redirect()->route('pa.display-type.index')->with('success', "$request->name is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DisplayType $displayType)
    {
        $this->ccan('Delete Display Type');

        $status = $displayType->delete();

        if ($status) {
            request()->session()->flash('success', 'Display Type successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting Display Type');
        }
        return back();
    }
}
