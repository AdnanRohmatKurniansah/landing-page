<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.benefit.daftar.index', [
            'daftars' => Daftar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.benefit.daftar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:150',
            'desc' => 'required',
            'image' => 'image|file|max:2048'
        ]);  

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('benefit-images');
        } 

        Daftar::create($validatedData);
        
        return redirect('/dashboard/daftar')->with('success', 'New List has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Daftar $daftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daftar $daftar)
    {
        return view('dashboard.benefit.daftar.edit', [
            'daftar' => $daftar
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Daftar $daftar)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:150',
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

        Daftar::where('id', $daftar->id)
        ->update($validatedData);
   
        return redirect('/dashboard/daftar')->with('success', 'List has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daftar $daftar)
    {
        if ($daftar->image) {
            Storage::delete($daftar->image);
        }
        Daftar::destroy($daftar->id);
        return redirect('/dashboard/daftar')->with('success', 'List has been deleted!');
    }
}
