

@extends('layouts.app')

@section('content')





    <div class='container '>
        <div class="row">
            <div class="col-s12">
                {{-- <style>
                    .hoverButton:hover {
                        background-color: {{ $selectedSci ? $selectedSci->color : '' }};
                        
                    }
                </style> --}}

                <h1 class="text-center mt-5">Ajouter un bien</h1>

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
                @if ($user['role'] === 'admin')
                    <div class="container">
                        <div class="row col-7 my-3">
                            <form action="{{ route('newProperty') }}" method="GET" class="row g-3 align-items-center">
                                @csrf
                                <div class="col-10">
                                    <select name="sci" id="sci" class="form-select"
                                        style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }}; color:{{ $selectedSci ? $selectedSci->color : $userColor }} ">
                                        <option value="">Choix de la SCI</option>
                                        @foreach ($scis as $sci)
                                            <option value="{{ $sci->id }}"
                                                {{ request('sci') == $sci->id ? 'selected' : '' }}>
                                                {{ $sci->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="hidden" name="sci_id" value="{{ request('sci') }}">
                                <div class="col-2">
                                    <button type="submit" class="btn w-100 borderColor">Voir la SCI</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
                <div class="col-6">
                    <form action="/properties/new/treatment" method="POST" class="form-group" id="formAdd">
                        @csrf

                        <div class="mb-3">
                            <label for="type" class="form-label ">Type de bien</label>
                            <select name="type" id="type" class="form-select"
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};" >
                            <option value="Garage">Garage
                                </option>
                                <option value="T1">T1</option>
                                <option value="T2">T2</option>
                                <option value="T3">T3</option>
                                <option value="T4">T4</option>
                                <option value="T5">T5</option>
                                <option value="T5">Villa</option>

                            </select>


                        </div>

                        <input type="hidden" name="sci_id" value="{{ request('sci_id') }}">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom du Bien</label>
                            <input type="text" class="form-control"
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};' id="nom"
                                name='nom'>

                        </div>

                        <div class="mb-3">
                            <label for="streetNumber" class="form-label">Numéro de rue</label>
                            <input type="text" class="form-control" id="streetNumber" name='streetNumber'
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};">

                        </div>
                        <div class="mb-3">
                            <label for="streetName" class="form-label">Nom de la rue</label>
                            <input type="text" class="form-control"
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};' id="streetName"
                                name='streetName'>

                        </div>
                        <div class="mb-3">
                            <label for="postalCode" class="form-label">Code Postal</label>
                            <input type="text" class="form-control"
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};' id="postalCode"
                                name='postalCode'>

                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Ville</label>
                            <input type="text" class="form-control"
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};' id="city"
                                name='city'>

                        </div>
                        <div style="diplay:none;" class="mb-3" id="groupLat">
                            <label for="lat" class="form-label">Latitude</label>
                            <input type="text" class="form-control"
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};' id="lat"
                                name='lat' hidden>

                        </div>
                        <div style="diplay:none;" class="mb-3" id="groupLon">
                            <label for="lon" class="form-label">Longitude</label>
                            <input type="text" class="form-control"
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};' id="lon"
                                name='lon' hidden>

                        </div>
                        <input type="hidden" name="sci_id" value="{{ request('sci') }}">





                        @if ($user['role'] == 'user')
                            <div class="col-12">
                                <button type="submit" id="addAddress" class="btn borderColor w-50">Valider</button>
                                <a href="/properties" class="btn borderColor ">Revenir a la liste</a>
                            </div>
                        @else
                            <div class="col-12 mb-5">
                                <button type="submit" id="addAddress" class="btn w-50 borderColor">Valider</button>
                                <a href="/index" class="btn  w-30 borderColor">Revenir
                                    a la liste</a>
                            </div>
                        @endif


                    </form>
                </div>


            </div>
        </div>
    </div>
    <style>
        .borderColor {
            border: 2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};
            color: {{ $selectedSci ? $selectedSci->color : $userColor }};
        } 
        .borderColorLabel {
            border: 2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};
            color: {{ $selectedSci ? $selectedSci->color : $userColor }};
        } 
        .borderColor:hover {
            color: white;
            background-color: {{ $selectedSci ? $selectedSci->color : $userColor }};
            
        }
        /* Ajoutez les styles pour les boutons ayant la classe .btn-white */ 
    </style>



    
@endsection
<script src={{ asset('/js/addressGeocode.js') }}></script>

