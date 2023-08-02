<?php


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PropertyController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;



// les routes des pages protégées par mot de passe
Route::middleware(['password.protect'])->group(function () {
    Route::get('/', function () {
        return view('password.pageProtected');
    })->name('pageProtected');
    Route::post('/checkPassword', function () {
        return redirect()->route('home');
    })->name('checkPassword');
    Route::get('/badPassword', function () {
        return view('password.badPassword');
    })->name('badPassword');
    Route::get('/data', [PropertyController::class, 'getAllPropertiesData'])->middleware('cors');
    Route::get('/mapByProperties', [MapController::class, 'mapByProperties'])->name('mapByProperties');
    Route::get('/mapByScis', [MapController::class, 'mapByScis'])->name('mapByScis');
});

// routes classiques


//Route apres authentification
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/profil', [ProfilController::class, 'show'])
        ->name('profil');
    Route::get('/profil/edit', [ProfilController::class, 'edit'])
        ->name('profil.edit');
    Route::put('/profil', [ProfilController::class, 'update'])
        ->name('profil.update');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('web')
        ->name('logout');
    Route::get('/index', function () {
        $user = Auth::user();
        if ($user->role === 'admin') {
            // Logique spécifique pour l'utilisateur ayant le rôle "admin"
            return app(PropertyController::class)->index_admin_property();
        } else {
            return app(PropertyController::class)->index_property(); // Ou redirigez vers une autre page d'erreur
        }
    })->name('index');
    Route::get('/register', function(){
        return view ('auth.register');
    })
    ->name('register');
});

//Properties
Route::get('/update_property/{id}', [PropertyController::class, 'update_property']);
Route::get('/delete_property/{id}', [PropertyController::class, 'delete_property']); // class ensuite nom de la fonction
Route::post('/properties/update/treatment', [PropertyController::class, 'update_property_treatment']);

Route::get('/properties', [PropertyController::class, 'index_property']);
Route::get('/properties/new', [PropertyController::class, 'new_property'])->name('newProperty');
Route::post('/properties/new/treatment', [PropertyController::class, 'new_property_treatment']);

Route::get('/properties/by-sci', [PropertyController::class, 'getPropertiesBySci'])
    ->name('sciBy');
