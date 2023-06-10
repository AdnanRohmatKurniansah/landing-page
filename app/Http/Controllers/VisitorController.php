<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Daftar;
use App\Models\Facility;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Promo;
use App\Models\Promosi;
use App\Models\Sosmed;
use App\Models\Testimoni;
use App\Models\Title;
use App\Models\User;
use App\Models\Visitor;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    public function showPage(Request $request)
    {
        // Membuat entri pengunjung baru
       // Membuat entri pengunjung baru
    Visitor::create([
        'ip_address' => $request->ip(),
        'user_agent' => $request->userAgent(),
    ]);

    // Data lain yang diperlukan untuk tampilan
    $data = [
        'header' => Header::first(),
        'promosi' => Promosi::first(),
        'facilities' => Facility::orderBy('id', 'desc')->get(),
        'testimonies' => Testimoni::where('status', 'published')->orderBy('id', 'desc')->get(),
        'footer' => Footer::first(),
        'sosmeds' => Sosmed::all(),
        'benefit' => Benefit::first(),
        'daftars' => Daftar::all(),
        'promo' => Promo::first(),
        'features' => Feature::all(),
        'whatsapp' => Whatsapp::first(),
        'heading' => Title::first(),
    ];

    return view('landing', $data);
    }
    public function VisitorChart()
{
    $facility = Facility::count();
    $testimoni = Testimoni::where('status', 'published')->count();
    $user = User::count();
    $visitor = Visitor::count();

    $visitorsData = DB::table('visitors')
        ->select(DB::raw('DATE_FORMAT(visited_at, "%Y-%m") AS date'), DB::raw('COUNT(*) AS count'))
        ->groupBy(DB::raw('DATE_FORMAT(visited_at, "%Y-%m")'))
        ->orderBy(DB::raw('DATE_FORMAT(visited_at, "%Y-%m")'))
        ->get();

    return view('dashboard.index', compact('facility', 'testimoni', 'user', 'visitor', 'visitorsData'));
}

}
