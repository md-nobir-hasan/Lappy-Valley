<?php

namespace App\Http\Controllers;

use App\Models\Graphic;
use App\Http\Requests\StoreGraphicRequest;
use App\Http\Requests\UpdateGraphicRequest;

class GraphicController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show Graphic']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = Graphic::paginate(10);
        $n['count'] = Graphic::get();
        return view('backend.product-attribute.graphic.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->ccan('Create Graphic');
        return view('backend.product-attribute.graphic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGraphicRequest $request)
    {
        $this->ccan('Create Graphic');

        Graphic::create($request->all());
        return redirect()->route('pa.graphic.index')->with('success', "$request->name is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Graphic $graphic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Graphic $graphic)
    {
        $this->ccan('Edit Graphic');

        $n['datum'] = $graphic;
        return view('backend.product-attribute.graphic.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGraphicRequest $request, Graphic $graphic)
    {
        $this->ccan('Edit Graphic');

        $graphic->update($request->all());
        return redirect()->route('pa.graphic.index')->with('success', "$request->name is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Graphic $graphic)
    {
        $this->ccan('Delete Graphic');

        $status = $graphic->delete();

        if ($status) {
            request()->session()->flash('success', 'Graphic successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting Graphic');
        }
        return back();
    }
}
