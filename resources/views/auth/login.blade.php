@extends('layouts.app')

@section('content')
    <div class=imgBGNice>
        <div class="transparent">
            <div class="container ">
                <div class="container d-flex justify-content-center align-items-center">

                    <div class="card heightLogin">
                        <div class="text-center montSerraFontConnect">{{ __('Connexion') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email" class="mb-2 fontOswaldLabel">{{ __('Email') }}</label>

                                    <div class="col-12">
                                        <input id="email" type="email"
                                            class="heightInput col-12 @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="Votre Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

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



                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Se souvenir de moi') }}
                                    </label>

                                </div>



                                <div class="col-12 mt-3 text-center">
                                    <button type="submit" class=" col-9  mt-4 buttonConnect montSerraFont">
                                        {{ __('Se connecter') }}
                                    </button>
                                </div>
                                <div class="col-12 text-end mdpForget">
                                    @if (Route::has('password.request'))
                                        <a class="text-dark " href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublié ?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
@endsection
