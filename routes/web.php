<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArmadaController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\RouteController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| FRONTEND
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/travel', function () {
    return view('frontend.travel');
})->name('travel');

Route::get('/paket', function () {
    return view('frontend.paket');
})->name('paket');

Route::get('/jadwal', function () {
    return view('frontend.jadwal');
})->name('jadwal');

Route::get('/tarif', function () {
    return view('frontend.tarif');
})->name('tarif');

Route::get('/tracking', function () {
    return view('frontend.tracking');
})->name('tracking');

Route::get('/kontak', function () {
    return view('frontend.kontak');
})->name('kontak');


/*
|--------------------------------------------------------------------------
| DASHBOARD ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class,'index'])
        ->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | MASTER DATA
    |--------------------------------------------------------------------------
    */

    Route::resource('armada', ArmadaController::class);

    Route::resource('driver', DriverController::class);

    Route::resource('kota', CityController::class);

    Route::resource('rute', RouteController::class);

    Route::resource('jadwal', ScheduleController::class);

    Route::resource('tarif', PriceController::class);

    Route::resource('user', UserController::class);

    /*
    |--------------------------------------------------------------------------
    | TRAVEL
    |--------------------------------------------------------------------------
    */

    Route::resource('booking', BookingController::class);

    /*
    |--------------------------------------------------------------------------
    | PAKET
    |--------------------------------------------------------------------------
    */

    Route::resource('paket', PackageController::class);

});


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
