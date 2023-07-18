<?php


use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PropertyController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;






Route::middleware(['auth'])->group(function () {
    Route::get('/profil', [ProfilController::class, 'show'])
        ->name('profil');
    Route::get('/profil/edit', [ProfilController::class, 'edit'])
        ->name('profil.edit');
    Route::put('/profil', [ProfilController::class, 'update'])
        ->name('profil.update');
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/home', function () {
        return view('home');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('web')
        ->name('logout');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/index', function () {
        $user = Auth::user();
        if ($user->role === 'admin') {
            // Logique spécifique pour l'utilisateur ayant le rôle "admin"
            return app(PropertyController::class)->index_admin_property();
        } else {
            return app(PropertyController::class)->index_property(); // Ou redirigez vers une autre page d'erreur
        }
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/test', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Properties
Route::get('/update_property/{id}', [PropertyController::class, 'update_property']);
Route::get('/delete_property/{id}', [PropertyController::class, 'delete_property']); // class ensuite nom de la fonction
Route::post('/properties/update/treatment', [PropertyController::class, 'update_property_treatment']);

Route::get('/properties', [PropertyController::class, 'index_property']);
Route::get('/properties/new', [PropertyController::class, 'new_property']);
Route::post('/properties/new/treatment', [PropertyController::class, 'new_property_treatment']);


