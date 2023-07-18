@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modification des informations</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profil.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nom de la SCI</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="color" class="col-md-4 col-form-label text-md-end">Couleur de la SCI</label>

                            <div class="col-md-6">
                                <input id="color" type="color" class="form-control @error('color') is-invalid @enderror" name="color" value="{{ old('color', $user->color) }}" required autocomplete="color">
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
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address', $user->address) }}" required autocomplete="address">
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
                                <input id="revenue1" type="number" class="form-control @error('revenue1') is-invalid @enderror" name="revenue1" value="{{ old('revenue1', $user->revenue1) }}"  autocomplete="revenue1" placeholder="Optionnel">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="revenue2" class="col-md-4 col-form-label text-md-end">Chiffre d'affaire n-2</label>

                            <div class="col-md-6">
                                <input id="revenue2" type="number" class="form-control @error('revenue2') is-invalid @enderror" name="revenue2" value="{{ old('revenue2', $user->revenue2) }}"  autocomplete="revenue2" placeholder="Optionnel">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="revenue3" class="col-md-4 col-form-label text-md-end">Chiffre d'affaire n-3</label>

                            <div class="col-md-6">
                                <input id="revenue3" type="number" class="form-control @error('revenue3') is-invalid @enderror" name="revenue3" value="{{ old('revenue3', $user->revenue3) }}"  autocomplete="revenue3" placeholder="Optionnel">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date_creation" class="col-md-4 col-form-label text-md-end">Date de création de la SCI</label>

                            <div class="col-md-6">
                                <input id="date_creation" type="date" class="form-control @error('date_creation') is-invalid @enderror" name="date_creation" value="{{ old('date_creation', $user->date_creation) }}" required autocomplete="date_creation">
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
                                    Enregistrer les modifications
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