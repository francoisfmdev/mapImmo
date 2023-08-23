@extends('layouts.app')

@section('content')
    <div class='container '>
        <div class="row">
            <div class="col-s12">

                <h1 class="text-center mt-5">Modifier un bien</h1>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="col-md-6">
                    <form action="/properties/update/treatment" method="POST" class="form-group" id="formAdd">
                        @csrf
                        <div class="mb-3">
                            <label for="type" class="form-label ">Type de bien</label>
                            <select name="type" id="type" class="form-select"
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};' >
                                <option value="Garage">Garage
                                </option>
                                <option value="T1">T1</option>
                                <option value="T2">T2</option>
                                <option value="T3">T3</option>
                                <option value="T4">T4</option>
                                <option value="T5">T5</option>
                                <option value="Villa">Villa</option>

                            </select>


                        </div>

                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom du Bien</label>
                            <input type="text"
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};"
                                class="form-control borderInputColor" id="nom" name='nom'
                                value="{{ $properties->nom }}">

                        </div>

                        <input type="hidden" name="property_id" value="{{ $properties->id }}">

                        <div class="mb-3">
                            <label for="fullAddress" class="form-label">Adresse complète</label>
                            <input type="text" class="form-control" 
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};" id="fullAddress""
                                name='fullAddress' value="{{ $properties->address->fullAddress }}">
                        </div>
                        <div style="diplay:none;" class="mb-3" id="groupLat">
                            <label for="lat" class="form-label">Latitude</label>
                            <input type="text" class="form-control"
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};"
                                id="lat" name='lat' hidden>

                        </div>
                        <div style="diplay:none;" class="mb-3" id="groupLon">
                            <label for="lon" class="form-label">Longitude</label>
                            <input type="text" class="form-control"
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};"
                                id="lon" name='lon' hidden>

                        </div>
                        <div style="display:none;" class="mb-3" id="groupCity">
                            <label for="city" class="form-label">Ville</label>
                            <input type="text" class="form-control"
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};" id="city"
                                name="city" hidden>
                        </div>



                        @php
                            $user = auth()->user(); // Récupérer l'utilisateur actuellement authentifié
                        @endphp

                        @if ($user['role'] == 'user')
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" id="addAddress" class="btn borderColor w-100">Valider</button>
                                </div>
                                <div class="col-md-6">
                                    <a href="/properties" class="btn borderColor w-100 mt-md-0 mt-2">Revenir à la liste</a>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="d-grid gap-2 d-md-block">
                                        <button type="submit" id="addAddress" class="btn borderColor  w-100 ">Valider</button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="d-grid gap-2 d-md-block">
                                        <a href="/index" class="btn borderColor w-100 mt-md-0 mt-2">Revenir à la liste</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        @endif

                    </form>
                </div>


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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiKGYNw5UqK24iZPhxr_5uML3q_8KZjn0&libraries=places"></script>
<script>
    let input = document.getElementById('fullAddress');
    let fullAddress = new google.maps.places.Autocomplete(input);
    console.log(fullAddress);
  </script>


<script src={{ asset('/js/addressGeocode.js') }}></script>
@endsection
