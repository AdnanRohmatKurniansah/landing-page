<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\PromosiController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\HeadingController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\WhatsappController;
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
use App\Models\User;
use App\Models\Visitor;
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

Route::get('/', [VisitorController::class, 'showPage']);

Route::middleware(['guest'])->group(function() {
    Route::get('/login', [AuthController::class, 'index']);
    Route::post('/login', [AuthController::class, 'auth']);
});

    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::middleware(['auth'])->prefix('dashboard')->group(function() {
    Route::get('/', [VisitorController::class, 'VisitorChart']);
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
    Route::resource('/price', PromoController::class);
    Route::resource('/features', FeatureController::class);
    Route::resource('/whatsapp', WhatsappController::class);
    Route::get('/heading/create', [HeadingController::class, 'create'])->name('tambah');
    Route::post('/heading/create', [HeadingController::class, 'store'])->name('prosesTambah');
    Route::get('/heading/{title:id}/edit', [HeadingController::class, 'edit'])->name('edit');
    Route::post('/heading/{title:id}/edit', [HeadingController::class, 'update'])->name('prosesEdit');
});

 