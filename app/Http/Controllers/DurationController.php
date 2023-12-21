<?php

namespace App\Http\Controllers;

use App\Models\Duration;
use App\Http\Requests\StoreDurationRequest;
use App\Http\Requests\UpdateDurationRequest;

class DurationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['can:Show Duration']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->ccan('Show Duration');

        $duration = Duration::
                    where('status',true)->
                    orderBy('id', 'DESC')->paginate();
        return view('backend.duration.index')->with('data', $duration);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->ccan('Create Duration');

        return view('backend.duration.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDurationRequest $request)
    {
        $this->ccan('Create Duration');
        $data = $request->all();
        // $slug = Str::slug($request->title);
        // $count = Duration::where('slug', $slug)->count();
        // if ($count > 0) {
        //     $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        // }
        // $data['slug'] = $slug;
        // return $data;
        $status = Duration::create($data);
        if ($status) {
            request()->session()->flash('success', 'Duration successfully created');
        } else {
            request()->session()->flash('error', 'Error, Please try again');
        }
        return redirect()->route('duration.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Duration $duration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Duration $duration)
    {
        $this->ccan('Edit Duration');
        if (!$duration) {
            request()->session()->flash('error', 'Duration not found');
        }
        return view('backend.duration.edit')->with('datum', $duration);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDurationRequest $request, Duration $duration)
    {
        $this->ccan('Edit Duration');

        $data = $request->all();

        $status = $duration->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Duration successfully updated');
        } else {
            request()->session()->flash('error', 'Error, Please try again');
        }
        return redirect()->route('duration.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Duration $duration)
    {
        $this->ccan('Delete Duration');
        if ($duration) {
            $status = $duration->delete();
            if ($status) {
                request()->session()->flash('success', 'Duration successfully deleted');
            } else {
                request()->session()->flash('error', 'Error, Please try again');
            }
            return redirect()->route('duration.index');
        } else {
            request()->session()->flash('error', 'Duration not found');
            return redirect()->back();
        }
    }
}
