<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.facility.index', [
            'facilities' => Facility::orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.facility.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'desc' => 'required|max:100',
            'image' => 'image|file|max:2048'
        ]);  

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('facility-images');
        } 

        Facility::create($validatedData);
        
        return redirect('/dashboard/facility')->with('success', 'New Facility has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Facility $facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Facility $facility)
    {
        return view('dashboard.facility.edit', [
            'facility' => $facility
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Facility $facility)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'desc' => 'required|max:100',
            'image' => 'image|file|max:2048'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('facility-images');
        }

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('facility-images');
        } 

        Facility::where('id', $facility->id)
        ->update($validatedData);
   
        return redirect('/dashboard/facility')->with('success', 'Facility has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facility $facility)
    {
        if ($facility->image) {
            Storage::delete($facility->image);
        }
        Facility::destroy($facility->id);
        return redirect('/dashboard/facility')->with('success', 'Facility has been deleted!');
    }
}
