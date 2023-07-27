@extends('layouts.app')

@section('content')
    <div class=imgBGNice>
        <div class="container ">
            <div class="row justify-content-end">

                <div class="card heightLogin">
                    <div class="card-header text-center">{{ __('Connexion') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="mb-2">{{ __('Email') }}</label>

                                <div class="col-12">
                                    <input id="email" type="email"
                                        class="heightInput form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                                <div class="col-12">
                                    <input id="password" type="password"
                                        class="heightInput form-control @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password">

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



                            <div class="col-12">
                                <button type="submit" class="action-button col-12 mx-auto mt-3">
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
        @endsection
