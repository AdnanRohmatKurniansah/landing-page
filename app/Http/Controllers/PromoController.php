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
        return view('dashboard.price.index', [
            'price' => Promo::first(),
            'features' => Feature::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.price.create');
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
            'promo' => 'required',
            'image' => 'image|file|max:2048',
            'address' => 'required|max:150'
        ]);  
     
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('promo-images');
        } 

        Promo::create($validatedData);
        
        return redirect('/dashboard/price')->with('success', 'New Price has been added!');
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
    public function edit(Promo $price)
    {
        return view('dashboard.price.edit', [
            'price' => $price
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promo $price)
    {
        $validatedData = $request->validate([
            'offer' => 'required',
            'heading' => 'required|max:150',
            'price' => 'required|max:25',
            'requirement' => 'required',
            'promo' => 'required',
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

        Promo::where('id', $price->id)
        ->update($validatedData);
   
        return redirect('/dashboard/price')->with('success', 'Price has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $price)
    {
        // if ($price->image) {
        //     Storage::delete($price->image);
        // }
        
        // Promo::destroy($price->id);
        // return redirect('/dashboard/price')->with('success', 'Price has been deleted!');
    }
}
