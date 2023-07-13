<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('auth.profil', compact('user'));
    }

    public function edit()
{
    $user = Auth::user();
    return view('auth.profilEdit', compact('user'));
}

public function update(Request $request)
{
    $user = Auth::user();

    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        'color' => 'required|string',
        'address' => 'required|string',
        'revenue1' => 'nullable|numeric',
        'revenue2' => 'nullable|numeric',
        'revenue3' => 'nullable|numeric',
        'date_creation' => 'required|date',
    ]);

    $user->fill($validatedData);
    $user->save();

    return redirect()->route('profil')->with('success', 'Informations mises à jour avec succès.');
}
}
