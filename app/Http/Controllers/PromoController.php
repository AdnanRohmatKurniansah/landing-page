<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.promo.index', [
            'promo' => Promo::first(),
            'features' => Feature::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.promo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'offer' => 'required',
            'heading' => 'required|max:150',
            'price' => 'required|max:25',
            'requirement' => 'required',
            'diskon' => 'required|max:3',
            'image' => 'image|file|max:2048',
            'address' => 'required|max:150'
        ]);  
     
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('promo-images');
        } 

        Promo::create($validatedData);
        
        return redirect('/dashboard/promo')->with('success', 'New Promo has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promo $promo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promo $promo)
    {
        return view('dashboard.promo.edit', [
            'promo' => $promo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promo $promo)
    {
        $validatedData = $request->validate([
            'offer' => 'required',
            'heading' => 'required|max:150',
            'price' => 'required|max:25',
            'requirement' => 'required',
            'diskon' => 'required|max:3',
            'image' => 'image|file|max:2048',
            'address' => 'required|max:150'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('promo-images');
        }

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('promo-images');
        } 

        Promo::where('id', $promo->id)
        ->update($validatedData);
   
        return redirect('/dashboard/promo')->with('success', 'Promo has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        if ($promo->image) {
            Storage::delete($promo->image);
        }
        
        Promo::destroy($promo->id);
        return redirect('/dashboard/promo')->with('success', 'Promo has been deleted!');
    }
}
