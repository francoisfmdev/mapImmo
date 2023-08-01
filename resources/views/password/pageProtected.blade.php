@extends('layouts.welcome')

@section('content')

<div class="imgBGNiceSoir">
        <div class="container ">
            <div class="container d-flex justify-content-center align-items-center">
                <div class="card heightLoginCard">
                    <div class="text-center montSerraFontConnect">{{ __('ACCES AU SITE') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('checkPassword') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="password" class="mb-2 fontOswaldLabel">{{ __('Mot de passe') }}</label>
                                <div class="col-12">
                                    <input id="password" type="password"
                                        class="heightInput col-12 @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password" placeholder="Votre mot de passe">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>




                            <div class="col-12 mt-3 text-center">
                                <button type="submit" class=" col-9  mt-4 buttonConnect montSerraFont">
                                    {{ __('Valider') }}
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
        @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
</div>

    




