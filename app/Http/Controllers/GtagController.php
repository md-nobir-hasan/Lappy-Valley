<?php

namespace App\Http\Controllers;

use App\Models\gtag;
use App\Http\Requests\StoregtagRequest;
use App\Http\Requests\UpdategtagRequest;

class GtagController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show Google Tag']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = gtag::paginate(10);
        return view('backend.seo.gtag.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->ccan('Create Google Tag');
        return view('backend.seo.gtag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoregtagRequest $request)
    {
        $this->ccan('Create Google Tag');

        gtag::create($request->all());
        return redirect()->route('seo.gtag.index')->with('success', "$request->name is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(gtag $gtag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gtag $gtag)
    {
        $this->ccan('Edit Google Tag');

        $n['datum'] = $ram;
        return view('backend.seo.gtag.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategtagRequest $request, gtag $gtag)
    {
        $this->ccan('Edit Google Tag');

        $ram->update($request->all());
        return redirect()->route('seo.gtag.index')->with('success', "$request->name is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gtag $gtag)
    {
        $this->ccan('Delete Google Tag');

        $status = $ram->delete();

        if ($status) {
            request()->session()->flash('success', 'RAM successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting Google Tag');
        }
        return back();
    }
}
