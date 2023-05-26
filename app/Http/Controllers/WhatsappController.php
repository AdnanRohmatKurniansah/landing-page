<?php

namespace App\Http\Controllers;

use App\Models\Whatsapp;
use Illuminate\Http\Request;

class WhatsappController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.whatsapp.index', [
            'whatsapp' => Whatsapp::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.whatsapp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'text' => 'required',
            'icon' => 'required',
            'link' => 'required'
        ]);

        Whatsapp::create($data);

        return redirect('/dashboard/whatsapp')->with('success', 'Whatsapp addes successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Whatsapp $whatsapp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Whatsapp $whatsapp)
    {
        return view('dashboard.whatsapp.edit', [
           'whatsapp' =>  $whatsapp 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Whatsapp $whatsapp)
    {
        $data = $request->validate([
            'text' => 'required',
            'icon' => 'required',
            'link' => 'required'
        ]);

        Whatsapp::where('id', $whatsapp->id)
            ->update($data);

        return redirect('/dashboard/whatsapp')->with('success', 'Whatsapp updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Whatsapp $whatsapp)
    {
        //
    }
}
