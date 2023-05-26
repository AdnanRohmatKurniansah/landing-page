<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class HeadingController extends Controller
{
    public function create() {
        return view('dashboard.facility.title.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'heading' => 'required'
        ]);

        Title::create($data);

        return redirect('/dashboard/facility')->with('success', 'Facility Heading Added Succesfully');
    }
    public function edit(Request $request, Title $title) {
        return view('dashboard.facility.title.edit', [
            'title' => $title
        ]);
    }
    public function update(Request $request, Title $title) {
        $data = $request->validate([
            'heading' => 'required'
        ]);
        Title::where('id', $title->id)
            ->update($data);

        return redirect('/dashboard/facility')->with('success', 'Facility Heading Updated Successfully');
    }
}
