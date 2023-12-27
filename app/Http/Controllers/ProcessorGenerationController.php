<?php

namespace App\Http\Controllers;

use App\Models\ProcessorGeneration;
use App\Http\Requests\StoreProcessorGenerationRequest;
use App\Http\Requests\UpdateProcessorGenerationRequest;
use App\Models\ProcessorModel;

class ProcessorGenerationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show Processor Generation']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = ProcessorGeneration::paginate(10);
        $n['count'] = ProcessorGeneration::get();
        return view('backend.product-attribute.pg.index',$n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->ccan('Create Processor Generation');

        return view('backend.product-attribute.pg.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProcessorGenerationRequest $request)
    {
        $this->ccan('Create Processor Generation');

        ProcessorGeneration::create($request->all());
        return redirect()->route('pa.processor-generation.index')->with('success',"$request->name is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(ProcessorGeneration $processorGeneration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProcessorGeneration $processorGeneration)
    {
        $this->ccan('Edit Processor Generation');

        $n['datum'] = $processorGeneration;
        return view('backend.product-attribute.pg.edit',$n);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProcessorGenerationRequest $request, ProcessorGeneration $processorGeneration)
    {
        $this->ccan('Edit Processor Generation');

         $processorGeneration->update($request->all());
        return redirect()->route('pa.processor-generation.index')->with('success', "$request->name is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProcessorGeneration $processorGeneration)
    {
        $this->ccan('Delete Processor Generation');

        $status = $processorGeneration->delete();

        if ($status) {
            request()->session()->flash('success', 'Processor Generation successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting Processor Generation');
        }
        return back();
    }
}
