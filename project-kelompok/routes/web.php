<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('layout.app');
})->middleware(['auth', 'verified'])->name('layout.app');

Route::get('/room', function () {
    return view('layout.room');
});

Route::get('/reservasi', [ReservationController::class, 'index'])->name('reservations.index');
Route::get('/reservasi/create', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservasi', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/reservasi/{id}', [ReservationController::class, 'show'])->name('reservations.show');
Route::get('/reservasi/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
Route::put('/reservasi/{id}', [ReservationController::class, 'update'])->name('reservations.update');
Route::delete('/reservasi/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profil-saya', function () {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    })->name('profile.show');

    Route::get('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    })->name('logout');
});

require __DIR__.'/auth.php';
