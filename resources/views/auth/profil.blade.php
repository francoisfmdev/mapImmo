@php
    use Carbon\Carbon;
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <div class="card borderColor">
                    <div class="card-header">Profil de l'utilisateur</div>

                    <div class="card-body">
                        <h4>Nom de la SCI : {{ Auth::user()->name }}</h4>
                        <p>Email : {{ Auth::user()->email }}</p>
                        <p>Adresse : {{ Auth::user()->address }}</p>
                        <p>Nombre de Propriétés : {{ Auth::user()->nbOfProperty }}</p>
                        <p>Date de création : {{ \Carbon\Carbon::parse(Auth::user()->date_creation)->format('d-m-Y') }}</p>
                        @if (Auth::user()->revenue1 !== null)
                            <p>Chiffre d'affaire n-1 : {{ Auth::user()->revenue1 }}</p>
                        @endif

                        @if (Auth::user()->revenue2 !== null)
                            <p>Chiffre d'affaire n-2 : {{ Auth::user()->revenue2 }}</p>
                        @endif

                        @if (Auth::user()->revenue3 !== null)
                            <p>Chiffre d'affaire n-3 : {{ Auth::user()->revenue3 }}</p>
                        @endif


                        <a href="{{ route('profil.edit') }}">Modifier informations</a>
                        {{-- <a href="{{ route('reset') }}">Modifier le mot de passe</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
