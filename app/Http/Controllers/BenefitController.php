<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.benefit.index', [
            'benefit' => Benefit::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.benefit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required|max:100',
            'desc' => 'required',
            'image' => 'image|file|max:2048'
        ]);  
     
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('benefit-images');
        } 

        Benefit::create($validatedData);
        
        return redirect('/dashboard/benefit')->with('success', 'New Benefit has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Benefit $benefit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Benefit $benefit)
    {
        return view('dashboard.benefit.edit', [
            'benefit' => $benefit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Benefit $benefit)
    {
        $validatedData = $request->validate([
            'heading' => 'required|max:100',
            'desc' => 'required',
            'image' => 'image|file|max:2048'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('benefit-images');
        }

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('benefit-images');
        } 

        Benefit::where('id', $benefit->id)
        ->update($validatedData);
   
        return redirect('/dashboard/benefit')->with('success', 'Benefit has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Benefit $benefit)
    {
        //
    }
}
