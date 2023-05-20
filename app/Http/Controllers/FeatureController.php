<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.promo.features.index', [
            'features' => Feature::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.promo.features.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'icon' => 'required|max:100'
        ]);

        Feature::create($validatedData);

        return redirect('/dashboard/features')->with('success', 'New Feature has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
        return view('dashboard.promo.features.edit', [
            'feature' => $feature
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feature $feature)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'icon' => 'required|max:100'
        ]);

        Feature::where('id', $feature->id)
        ->update($validatedData);

        return redirect('/dashboard/features')->with('success', 'Feature has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        Feature::destroy($feature->id);
        return redirect('/dashboard/features')->with('success', 'Feature has been deleted!');
    }
}
