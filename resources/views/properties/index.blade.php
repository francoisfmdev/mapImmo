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


                        


                    </tr>
                </thead>
                <tbody>
                    @php
                        $ide = 1;
                    @endphp
                        @foreach ($properties as $property)
                        <tr class="table-row-height montSerraFont">
                            <td class="col-md-2 ">{{ $property->user->name }}</td>
                            <td class="col-md-2">{{ $property->type }}</td>
                            <td class="col-md-2">{{ $property->nom }}</td>
                            <td class="col-md-2">{{ $property->address->streetNumber }} {{ $property->address->streetName }}</td>
                            <td class="col-md-2">{{ $property->address->city }}</td>
                            <td class="col-md-2">
                                <div class="d-flex flex-column">
                                    <a href="/update_property/{{ $property->id }}"
                                        class="btn btn-white borderColor">Modifier</a>
                                    <a href="/delete_property/{{ $property->id }}"
                                        class="btn btn-white borderColor">supprimer</a>
                                </div>
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
