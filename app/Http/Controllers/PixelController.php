<?php

namespace App\Http\Controllers;

use App\Models\Pixel;
use App\Http\Requests\StorePixelRequest;
use App\Http\Requests\UpdatePixelRequest;

class PixelController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show Pixel']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = Pixel::paginate(10);
        $n['count'] = Pixel::get();
        return view('backend.seo.pixel.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->ccan('Create Pixel');
        return view('backend.seo.pixel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePixelRequest $request)
    {
        $this->ccan('Create Pixel');

        Pixel::create($request->all());
        return redirect()->route('seo.pixel.index')->with('success', "$request->name is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Pixel $pixel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pixel $pixel)
    {
        $this->ccan('Edit Pixel');

        $n['datum'] = $pixel;
        return view('backend.seo.pixel.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePixelRequest $request, Pixel $pixel)
    {
        $this->ccan('Edit Pixel');

        $pixel->update($request->all());
        return redirect()->route('seo.pixel.index')->with('success', "$request->name is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pixel $pixel)
    {
        $this->ccan('Delete Pixel');

        $status = $pixel->delete();

        if ($status) {
            request()->session()->flash('success', 'RAM successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting Pixel');
        }
        return back();
    }
}
