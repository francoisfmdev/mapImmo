@extends('layouts.app')

@section('content')

    <div class="container text-center">
        <div class="row">
            <h1 class="mt-4">Bienvenue Admin </h1>
            <h3 class="mt-4">Liste des biens par SCI</h3>
            <div class="col-12 d-flex justify-content-center">
                <!-- Ajoutez la classe "d-flex justify-content-center" pour centrer le bouton -->
                <a href="/properties/new" class="btn  w-50 borderColor">Ajouter un nouveau bien</a>
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="container">
                <div class="row col-12 my-3">
                    <form action="{{ route('sciBy') }}" method="GET" class="row g-3 align-items-center">
                        <div class="col-10">
                            <select name="sci" id="sci" class="form-select borderColorLabel">
                                <option value="">Choix de la SCI</option>
                                @foreach ($scis as $sci)
                                    <option value="{{ $sci->id }}" {{ request('sci') == $sci->id ? 'selected' : '' }} >
                                        {{ $sci->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn w-100 borderColor">Voir la SCI</button>
                        </div>
                    </form>
                </div>
            </div>
            

            <table class="table">
                <thead>
                    <tr>
                        <th>SCI</th>
                        <th>Type</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Ville</th>
                        <th class="text-end">Modifier</th>
                        <th class="text-end">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($properties as $property)
                        <tr class="table-row-height montSerraFont">
                            <td>{{ $property->user->name }}</td>
                            <td>{{ $property->type }}</td>
                            <td>{{ $property->nom }}</td>
                            <td>{{ $property->address->streetNumber }} {{ $property->address->streetName }}</td>
                            <td>{{ $property->address->city }}</td>
                            <td class="text-end">
                                <a href="/update_property/{{ $property->id }}" class="btn btn-white borderColor">Modifier</a>
                            </td>
                            <td class="text-end">
                                <a href="/delete_property/{{ $property->id }}" class="btn btn-white borderColor text-white-on-hover">Supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <style>
        .borderColor {
            border: 2px solid {{ $userColor }};
            color: {{ $userColor }};
        } 
        .borderColorLabel {
            border: 2px solid {{ $userColor }};
            color: {{ $userColor }};
        } 
        .borderColor:hover {
            background-color: {{ $userColor }};
            color: white;
        }
        /* Ajoutez les styles pour les boutons ayant la classe .btn-white */ 
    </style>
    
@endsection