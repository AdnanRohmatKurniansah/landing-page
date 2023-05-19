<?php

namespace App\Http\Controllers;

use App\Models\Sosmed;
use Illuminate\Http\Request;

class SosmedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.sosmed.index', [
            'sosmeds' => Sosmed::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.sosmed.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'link' => 'required'
        ]);

        Sosmed::create($validatedData);

        return redirect('/dashboard/sosmed')->with('success', 'New Sosmed has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sosmed $sosmed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sosmed $sosmed)
    {
        return view('dashboard.sosmed.edit', [
            'sosmed' => $sosmed
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sosmed $sosmed)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'link' => 'required'
        ]);

        Sosmed::where('id', $sosmed->id)
        ->update($validatedData);

        return redirect('/dashboard/sosmed')->with('success', 'Sosmed has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sosmed $sosmed)
    {
        Sosmed::destroy($sosmed->id);
        return redirect('/dashboard/sosmed')->with('success', 'Sosmed has been deleted!');
    }
}
