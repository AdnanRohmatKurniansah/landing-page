<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.testimoni.index', [
            'testimonies' => Testimoni::orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'rate' => 'required',
            'name' => 'required|max:60',
            'address' => 'required',
            'opini' => 'required',
            'foto' => 'image|file|max:2048'
        ]);  

        if($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('testimoni-images');
        } 

        Testimoni::create($validatedData);
        
        return redirect('/dashboard/testimoni')->with('success', 'New Testimoni has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimoni $testimoni)
    {
        return view('dashboard.testimoni.edit', [
            'testimoni' => $testimoni
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        $validatedData = $request->validate([
            'rate' => 'required',
            'name' => 'required|max:60',
            'address' => 'required',
            'opini' => 'required',
            'foto' => 'image|file|max:2048'
        ]);

        if ($request->file('foto')) {
            if ($request->oldFoto) {
                Storage::delete($request->oldFoto);
            }
            $validatedData['foto'] = $request->file('foto')->store('testimoni-images');
        }

        if($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('testimoni-images');
        } 

        Testimoni::where('id', $testimoni->id)
        ->update($validatedData);
   
        return redirect('/dashboard/testimoni')->with('success', 'Testimoni has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni)
    {
        if ($testimoni->foto) {
            Storage::delete($testimoni->foto);
        }
        Testimoni::destroy($testimoni->id);
        return redirect('/dashboard/testimoni')->with('success', 'Testimoni has been deleted!');
    }
}
