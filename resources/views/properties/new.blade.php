@extends('layouts.app')

@section('content')
    <div class='container '>
        <div class="row">
            <div class="col s12">
                <h1 class="text-center">Ajouter un properties</h1>

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

                <form action="/properties/new/treatment" method="POST" class="form-group" id="formAdd">
                    @csrf
                    <div class="mb-3">
                        <label for="type" class="form-label">Type de properties</label>
                        <select name="type" id="type" class="form-select">
                            <option value="Garage">Garage</option>
                            <option value="T1">T1</option>
                            <option value="T2">T2</option>
                            <option value="T3">T3</option>
                            <option value="T4">T4</option>
                            <option value="T5">T5</option>

                        </select>


                    </div>

                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom du Bien</label>
                        <input type="text" class="form-control" id="nom" name='nom'>

                    </div>

                    <div class="mb-3">
                        <label for="streetNumber" class="form-label">Numéro de rue</label>
                        <input type="text" class="form-control" id="streetNumber" name='streetNumber'>

                    </div>
                    <div class="mb-3">
                        <label for="streetName" class="form-label">Nom de la rue</label>
                        <input type="text" class="form-control" id="streetName" name='streetName'>

                    </div>
                    <div class="mb-3">
                        <label for="postalCode" class="form-label">Code Postal</label>
                        <input type="text" class="form-control" id="postalCode" name='postalCode'>

                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">Ville</label>
                        <input type="text" class="form-control" id="city" name='city'>

                    </div>
                    <div style="diplay:none;" class="mb-3" id="groupLat">
                        <label for="lat" class="form-label">Latitude</label>
                        <input type="text" class="form-control" id="lat" name='lat' hidden>

                    </div>
                    <div style="diplay:none;" class="mb-3" id="groupLon">
                        <label for="lon" class="form-label">Longitude</label>
                        <input type="text" class="form-control" id="lon" name='lon' hidden>

                    </div>





                    @if ($user['role'] == 'user')
                        <a href="/properties" class="btn btn-danger">Revenir a la liste</a>
                    @else
                        <a href="/admin/index" class="btn btn-danger">Revenir a la liste</a>
                    @endif
                    <button type="submit" id="addAddress" class="btn btn-primary">Ajouter un bien</button>
                </form>



            </div>
        </div>
    </div>

    <script src={{asset('/js/addressGeocode.js')}}></script>
@endsection
