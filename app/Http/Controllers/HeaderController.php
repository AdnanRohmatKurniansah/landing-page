<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.header.index', [
            'header' => Header::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.header.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'logo' => 'image|file|max:2048',
            'diskon' => 'required|max:3',
            'heading' => 'required|max:100',
            'subHeading' => 'required|max:250',
            'image' => 'image|file|max:2048'
        ]);  
     
        if($request->file('logo')) {
            $validatedData['logo'] = $request->file('logo')->store('header-images');
        } 

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('header-images');
        } 

        Header::create($validatedData);
        
        return redirect('/dashboard/header')->with('success', 'New Header has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Header $header)
    {
        return view('dashboard.header.edit', [
            'header' => $header
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Header $header)
    {
        $validatedData = $request->validate([
            'logo' => 'image|file|max:2048',
            'diskon' => 'required|max:3',
            'heading' => 'required|max:100',
            'subHeading' => 'required',
            'image' => 'image|file|max:2048'
        ]);

        if ($request->file('logo')) {
            if ($request->oldLogo) {
                Storage::delete($request->oldlogo);
            }
            $validatedData['logo'] = $request->file('logo')->store('header-images');
        }

        if($request->file('logo')) {
            $validatedData['logo'] = $request->file('logo')->store('header-images');
        } 

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('header-images');
        }

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('header-images');
        } 

        Header::where('id', $header->id)
        ->update($validatedData);
   
        return redirect('/dashboard/header')->with('success', 'Header has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Header $header)
    {
        // if ($header->image) {
        //     Storage::delete($header->image);
        // }
        
        // Header::destroy($header->id);
        // return redirect('/dashboard/header')->with('success', 'Header has been deleted!');
    }
}
