<?php


use Illuminate\Http\Request;

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

Route::get('/properties/by-sci', [PropertyController::class, 'getPropertiesBySci'])
    ->name('sciBy');

// Route protégée par mot de passe (utilise la méthode GET pour afficher le formulaire)
Route::middleware('password.protect')->get('/', function () {
    return view('password.pageProtected');
})->name('pageProtected');

// Route pour vérifier le mot de passe saisi (utilise la méthode POST)
Route::post('/checkPassword', function (Illuminate\Http\Request $request) {
    $desiredPassword = 'Azerty06!';
    $enteredPassword = $request->input('password');

    if ($enteredPassword !== $desiredPassword) {
        return redirect()->route('badPassword')->withErrors(['password' => 'Mot de passe incorrect']); // Redirection si mdp faux
    }
    session()->flash('status', 'Mot de passe correct');
    return redirect()->route('home'); // Redirection si mot de passe OK
})->name('checkPassword');

// Route pour afficher la vue "password.badPassword"
Route::get('/badPassword', function () {
    return view('password.badPassword');
})->name('badPassword');

Route::get('/data', )
