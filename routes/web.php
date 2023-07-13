<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\ProfilController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;



Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/profil', function () {
    return view('auth.profil');
})->middleware('auth')->name('profil');

Route::middleware(['auth'])->group(function () {
    Route::get('/profil', [ProfilController::class, 'show'])
        ->name('profil');
    Route::get('/profil/edit', [ProfilController::class, 'edit'])
        ->name('profil.edit');
    Route::put('/profil', [ProfilController::class, 'update'])
        ->name('profil.update');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('web')
        ->name('logout');
});


Auth::routes();

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/private', function () {
        return 'Admin';
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/test', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
