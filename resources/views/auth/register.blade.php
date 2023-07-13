@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nouvelle SCI</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nom de la SCI</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirmer le mot de passe</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="color" class="col-md-4 col-form-label text-md-end">Couleur de la SCI</label>

                            <div class="col-md-6">
                                <input id="color" type="color" class="form-control" name="color" value="#000000">
                                @error('color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">Adresse complête de la SCI</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                         <div class="row mb-3">
                            <label for="revenue1" class="col-md-4 col-form-label text-md-end">Chiffre d'affaire n-1</label>

                            <div class="col-md-6">
                                <input id="revenue1" type="number" class="form-control" name="revenue1" placeholder="Optionnel">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="revenue2" class="col-md-4 col-form-label text-md-end">Chiffre d'affaire n-2</label>

                            <div class="col-md-6">
                                <input id="revenue2" type="number" class="form-control" name="revenue2" placeholder="Optionnel">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="revenue3" class="col-md-4 col-form-label text-md-end">Chiffre d'affaire n-3</label>

                            <div class="col-md-6">
                                <input id="revenue3" type="number" class="form-control" name="revenue3" placeholder="Optionnel">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date_creation" class="col-md-4 col-form-label text-md-end">Date de création de la SCI</label>

                            <div class="col-md-6">
                                <input id="date_creation" type="date" class="form-control" name="date_creation">
                                @error('date_creation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection
