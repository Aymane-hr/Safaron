<?php

use App\Http\Controllers\Client\ReservationController;
use App\Http\Controllers\Client\VoyageController;
use App\Http\Controllers\AutocarController;
use App\Http\Controllers\SocieteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    if (Auth::check() && Auth::user()->isadmin == 1) {
        return view('admin.Layout.app');
    }
    return redirect('/')->with('error', 'Access denied.');
})->middleware('auth')->name('admin');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/client/liste/voyage', [VoyageController::class, 'index'])->name('client.liste.voyage.index');
    Route::get('/client/detail/voyage', [VoyageController::class, 'detail'])->name('client.voyage.detail');
    Route::post('/client/create/reservation', [App\Http\Controllers\Client\ReservationController::class, 'create'])->name('client.create.reservation');
    Route::resource('autocars', AutocarController::class);
    Route::resource('societes', SocieteController::class);
});

require __DIR__ . '/auth.php';
