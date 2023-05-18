<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.footer.index', [
            'footer' => Footer::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.footer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'subHeading' => 'required',
            'image' => 'image|file|max:2048',
            'copyright' => 'required|max:100',
        ]);  

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('footer-images');
        } 

        Footer::create($validatedData);
        
        return redirect('/dashboard/footer')->with('success', 'New Footer has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Footer $footer)
    {
        return view('dashboard.footer.edit', [
            'footer' => $footer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Footer $footer)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
            'subHeading' => 'required',
            'image' => 'image|file|max:2048',
            'copyright' => 'required|max:100',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('footer-images');
        }

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('footer-images');
        } 

        Footer::where('id', $footer->id)
        ->update($validatedData);
   
        return redirect('/dashboard/footer')->with('success', 'Footer has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Footer $footer)
    {
        //
    }
}
