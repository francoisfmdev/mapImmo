@extends('layouts.app')

@section('content')
    

    <div class='container '>
        <div class="row">
            <div class="col s12">
                <h1 class="text-center">Ajouter un type de properties</h1>

                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status')}}
                </div>
                @endif
                <ul>
                @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{$error}}</li>
                @endforeach
                </ul>

                <form action="/properties/update/treatment" method="POST" class="form-group">
                    @csrf
                    <div class="mb-3">
                        <label for="type" class="form-label">Type de properties</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ $properties->type}}">

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
                    



                    <button type="submit" class="btn btn-primary">Modifier un type de bien</button>

                    <a href="/properties" class="btn btn-danger">Revenir a la liste</a>
                </form>



            </div>
        </div>
    </div>


   @endsection
