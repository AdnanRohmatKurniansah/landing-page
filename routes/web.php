<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\PromosiController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\TestimoniController;
use App\Models\Facility;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Promosi;
use App\Models\Sosmed;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing', [
        'header' => Header::first(),
        'promosi' => Promosi::first(),
        'facilities' => Facility::orderBy('id', 'desc')->get(),
        'testimonies' => Testimoni::orderBy('id', 'desc')->get(),
        'footer' => Footer::first(),
        'sosmeds' => Sosmed::all()
    ]);
});

Route::middleware(['guest'])->group(function() {
    Route::get('/login', [AuthController::class, 'index']);
    Route::post('/login', [AuthController::class, 'auth']);
});

    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::middleware(['auth'])->prefix('dashboard')->group(function() {
    Route::get('/', function() {
        return view('dashboard.index');
    });
    Route::get('/updatePass', [AuthController::class, 'show']);
    Route::post('/updatePass', [AuthController::class, 'updatePassword']);
    Route::get('/add', [AuthController::class, 'add']);
    Route::post('/add', [AuthController::class, 'store']);
    Route::resource('/header', HeaderController::class);
    Route::resource('/promosi', PromosiController::class);
    Route::resource('/facility', FacilityController::class);
    Route::resource('/testimoni', TestimoniController::class);
    Route::resource('/footer', FooterController::class);
    Route::resource('/sosmed', SosmedController::class);
    Route::resource('/benefit', BenefitController::class);
    Route::resource('/daftar', DaftarController::class);
});
