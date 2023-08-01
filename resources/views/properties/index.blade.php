@extends('layouts.app')

@section('content')
    <div class='container text-center'>
        <div class="row">
            <h1 class='mt-4 '>Bienvenue {{$user->name}}</h1>
            <h3 class='mt-4'>Liste des biens </h3>
            <div class="col-12 d-flex justify-content-center">
                <!-- Ajoutez la classe "d-flex justify-content-center" pour centrer le bouton -->
                <a href="/properties/new" class='btn btn-white borderColor  w-50'>Ajouter un nouveau bien</a>
            </div>



            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            

            <table class='table  userColor'>
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
                    @php
                        $ide = 1;
                    @endphp
                        @foreach ($properties as $property)
                            <tr class='table-row-height montSerraFont'>
                                <td>{{ $property->user->name }}</td>
                                <td>{{ $property->type }}</td>
                                <td>{{ $property->nom }}</td>
                                <td>{{ $property->address->streetNumber }} {{ $property->address->streetName }}</td>
                                <td>{{ $property->address->city }}</td>

                                <td class="text-end">
                                    <a href="/update_property/{{ $property->id }}"
                                        class="btn btn-white borderColor">Modifier</a>
                                </td>
                                <td class="text-end">
                                    <a href="/delete_property/{{ $property->id }}"
                                        class="btn btn-white borderColor">supprimer</a>
                                </td>



                            </tr>


                            @php
                                $ide += 1;
                            @endphp
                        @endforeach
                </tbody>
            </table>
            {{-- {{ $users->links() }} permet de mettre les liens pour la fonction paginate à 2 --}}


        </div>
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
