<?php

namespace App\Http\Controllers;

use App\Models\ProcessorModel;
use App\Http\Requests\StoreProcessorModelRequest;
use App\Http\Requests\UpdateProcessorModelRequest;

class ProcessorModelController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show Processor Model']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $n['mdata'] = ProcessorModel::orderBy('id','desc')->paginate(10);
        $n['count'] = ProcessorModel::get();
        return view('backend.product-attribute.pm.index', $n);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->ccan('Create Processor Model');

        return view('backend.product-attribute.pm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProcessorModelRequest $request)
    {
        $this->ccan('Create Processor Model');

        ProcessorModel::create($request->all());
        return redirect()->route('pa.processor-model.index')->with('success', "$request->name is created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(ProcessorModel $processorModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProcessorModel $processorModel)
    {
        $this->ccan('Edit Processor Model');

        $n['datum'] = $processorModel;
        return view('backend.product-attribute.pm.edit', $n);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProcessorModelRequest $request, ProcessorModel $processorModel)
    {
        $this->ccan('Edit Processor Model');

        $processorModel->update($request->all());
        return redirect()->route('pa.processor-model.index')->with('success', "$request->name is Update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProcessorModel $processorModel)
    {
        $this->ccan('Delete Processor Model');

        $status = $processorModel->delete();

        if ($status) {
            request()->session()->flash('success', 'Processor Model successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting Processor Model');
        }
        return back();
    }
}
