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
        return view('landing');
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
            'opini' => 'required|min:5',
            'foto' => 'image|file|max:2048'
        ]);  

        if($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('testimoni-images');
        } 

        Testimoni::create($validatedData);
        
        return redirect('/')->with('success', 'Thank you for your review...');
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
        $status = $request->validate([
            'status' => 'required'
        ]);
        
        Testimoni::where('id', $testimoni->id)
        ->update($status);
   
        return redirect('/dashboard/testimoni')->with('success', 'Testimoni has been published!');
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
