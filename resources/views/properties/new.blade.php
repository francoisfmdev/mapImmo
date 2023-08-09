

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
                        <div class="row my-3">
                            <form action="{{ route('newProperty') }}" method="GET" class="row g-3 align-items-center">
                                @csrf
                                <div class="col-6 col-md-8">
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
                                <div class="col-6 col-md-4">
                                    <button type="submit" class="btn w-100 borderColor">Voir la SCI</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
                <div class="col-md-8">
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
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};" id="streetName"
                                name='streetName'>

                        </div>
                        <div class="mb-3">
                            <label for="postalCode" class="form-label">Code Postal</label>
                            <input type="text" class="form-control"
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};" id="postalCode"
                                name='postalCode'>

                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Ville</label>
                            <input type="text" class="form-control"
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};" id="city"
                                name='city'>

                        </div>
                        <div style="diplay:none;" class="mb-3" id="groupLat">
                            <label for="lat" class="form-label">Latitude</label>
                            <input type="text" class="form-control"
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};" id="lat"
                                name='lat' hidden>

                        </div>
                        <div style="diplay:none;" class="mb-3" id="groupLon">
                            <label for="lon" class="form-label">Longitude</label>
                            <input type="text" class="form-control"
                                style="border:2px solid {{ $selectedSci ? $selectedSci->color : $userColor }};" id="lon"
                                name='lon' hidden>

                        </div>
                        <input type="hidden" name="sci_id" value="{{ request('sci') }}">





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



<script src={{ asset('/js/addressGeocode.js') }}></script>
@endsection


