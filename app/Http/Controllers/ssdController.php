<?php

namespace App\Http\Controllers;

use App\Models\ssd;
use App\Http\Requests\StoressdRequest;
use App\Http\Requests\UpdatessdRequest;

class ssdController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show SSD']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = ssd::orderBy('id','desc')->paginate(10);
        $n['count'] = ssd::get();
        return view('backend.product-attribute.ssd.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->ccan('Create SSD');
        return view('backend.product-attribute.ssd.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoressdRequest $request)
    {
        $this->ccan('Create SSD');

        ssd::create($request->all());
        return redirect()->route('pa.ssd.index')->with('success', "$request->name is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(ssd $ssd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ssd $ssd)
    {
        $this->ccan('Edit SSD');

        $n['datum'] = $ssd;
        return view('backend.product-attribute.ssd.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatessdRequest $request, ssd $ssd)
    {
        $this->ccan('Edit SSD');

        $ssd->update($request->all());
        return redirect()->route('pa.ssd.index')->with('success', "$request->name is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ssd $ssd)
    {
        $this->ccan('Delete SSD');

        $status = $ssd->delete();

        if ($status) {
            request()->session()->flash('success', 'SSD successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting SSD');
        }
        return back();
    }
}
