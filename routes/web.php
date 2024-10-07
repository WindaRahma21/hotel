<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/hotel', [App\Http\Controllers\HomeController::class, 'hotel'])->name('hotel');
Route::get('/meeting', [App\Http\Controllers\HomeController::class, 'meeting'])->name('meeting');

Route::get('/weedings', [App\Http\Controllers\HomeController::class, 'weedings'])->name('weedings');

//---------------------------- LOGIN & REGISTER -----------------------------//
Auth::routes();

// Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register.create');
// Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('register.store');


Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
//----------------------------------------------------------------------------//


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/detail/detail1', function () {
    return view('meeting.detail1');
})->name('detail1');

Route::get('/detail/detail2', function () {
    return view('hotel.detail2');
})->name('detail2'); // Tambahkan nama disini

Route::get('/fasilitas/{location}', function ($location) {
    // Periksa apakah view untuk lokasi tersedia
    $viewName = 'hotel.fasilitas.fasilitas-' . $location;
    
    if (view()->exists($viewName)) {
        return view($viewName);
    } else {
        abort(404); // Jika view tidak ditemukan, tampilkan halaman 404
    }
});
