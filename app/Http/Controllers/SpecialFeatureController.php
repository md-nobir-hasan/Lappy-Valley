<?php

namespace App\Http\Controllers;

use App\Models\SpecialFeature;
use App\Http\Requests\StoreSpecialFeatureRequest;
use App\Http\Requests\UpdateSpecialFeatureRequest;

class SpecialFeatureController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show Special Feature']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = SpecialFeature::paginate(10);
        return view('backend.product-attribute.sf.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->ccan('Create Special Feature');
        return view('backend.product-attribute.sf.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSpecialFeatureRequest $request)
    {
        $this->ccan('Create Special Feature');

        SpecialFeature::create($request->all());
        return redirect()->route('pa.special-feature.index')->with('success', "$request->name is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(SpecialFeature $specialFeature)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SpecialFeature $specialFeature)
    {
        $this->ccan('Edit Special Feature');

        $n['datum'] = $specialFeature;
        return view('backend.product-attribute.sf.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSpecialFeatureRequest $request, SpecialFeature $specialFeature)
    {
        $this->ccan('Edit Special Feature');

        $specialFeature->update($request->all());
        return redirect()->route('pa.special-feature.index')->with('success', "$request->name is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SpecialFeature $specialFeature)
    {
        $this->ccan('Delete Special Feature');

        $status = $specialFeature->delete();

        if ($status) {
            request()->session()->flash('success', 'Special Feature successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting Special Feature');
        }
        return back();
    }
}
