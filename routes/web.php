<?php

use App\Http\Controllers\RoomController;
use Illuminate\Container\Attributes\Config;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/meeting', [App\Http\Controllers\HomeController::class, 'meeting'])->name('meeting');

Route::get('/weedings', [App\Http\Controllers\HomeController::class, 'weedings'])->name('weedings');



//---------------------------- LOGIN & REGISTER -----------------------------//
Auth::routes();

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/{firstname}-{lastname}', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
});
//----------------------------------------------------------------------------//



//------------------------------ ADMIN --------------------------------//
Route::group(['middleware' => ['auth', App\Http\Middleware\AdminAccessMiddleware::class]], function () {
    
});

Route::group(['middleware' => ['auth', App\Http\Middleware\UserAccessMiddleware::class]], function () {
    
});
//---------------------------------------------------------------------//



//------------------------------- HOTEL -----------------------------------//
Route::get('/hotel', [App\Http\Controllers\HotelsController::class, 'index'])->name('hotel');

Route::get('/hotel/{location}', [App\Http\Controllers\HotelsController::class, 'showRooms'])->name('rooms');
Route::get('/hotel/{location}/fasilitas', [App\Http\Controllers\HotelsController::class, 'showFasilitas'])->name('fasilitas');
//---------------------------------------------------------------------------//



Route::get('/detail/detail1', function () {
    return view('meeting.detail1');
})->name('detail1');

Route::get('/detail/detail2', function () {
    return view('hotel.detail2');
})->name('detail2'); // Tambahkan nama disini

// Route::get('/fasilitas/{location}', function ($location) {
//     // Periksa apakah view untuk lokasi tersedia
//     $viewName = 'hotel.fasilitas.fasilitas-' . $location;
    
//     if (view()->exists($viewName)) {
//         return view($viewName);
//     } else {
//         abort(404); // Jika view tidak ditemukan, tampilkan halaman 404
//     }
// });

// Route untuk halaman detail kamar
Route::get('/rooms/{id}', [App\Http\Controllers\RoomController::class, 'show'])->name('room.show');

