<?php

namespace App\Http\Controllers;

use App\Models\Promosi;
use Illuminate\Http\Request;

class PromosiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.promosi.index', [
            'promosi' => Promosi::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.promosi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'heading' => 'required',
            'text' => 'required'
        ]);

        Promosi::create($data);

        return redirect('/dashboard/promosi')->with('success', 'New Promosi has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promosi $promosi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promosi $promosi)
    {
        return view('dashboard.promosi.edit', [
            'promosi' => $promosi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promosi $promosi)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'text' => 'required'
        ]);

        Promosi::where('id', $promosi->id)
        ->update($validatedData);

        return redirect('/dashboard/promosi')->with('success', 'Promosi has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promosi $promosi)
    {
         Promosi::destroy($promosi->id);
         return redirect('/dashboard/promosi')->with('success', 'Promosi has been deleted!');
    }
}
