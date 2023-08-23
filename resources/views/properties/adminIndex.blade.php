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
                <div class="row my-3">
                    <form action="{{ route('sciBy') }}" method="GET" class="row g-3 align-items-center">
                        <div class="col-sm-6 col-md-8">
                            <select name="sci" id="sci" class="form-select borderColorLabel">
                                @foreach ($scis as $sci)
                                    <option value="{{ $sci->id }}" {{ request('sci') == $sci->id ? 'selected' : '' }}>
                                        {{ $sci->name }}
                                    </option>
                                @endforeach
                                <option selected value="default">Choix de la SCI</option>

                            </select>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <button type="submit" class="btn w-100 borderColor" id='seeSci'>Voir la SCI</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
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
                        @foreach ($properties as $property)
                        <tr class="table-row-height montSerraFont">
                            <td class="col-md-2 ">{{ $property->user->name }}</td>
                            <td class="col-md-2">{{ $property->type }}</td>
                            <td class="col-md-2">{{ $property->nom }}</td>
                            <td class="col-md-2">{{ $property->address->fullAddress }}</td>
                            <td class="col-md-2">{{ $property->address->city }}</td>
                            <td class="col-md-2">
                                <div class="d-flex flex-column">
                                    <a href="/update_property/{{ $property->id }}" class="btn btn-white borderColor mb-2">Modifier</a>
                                    <a href="/delete_property/{{ $property->id }}" class="btn btn-white borderColor text-white-on-hover">Supprimer</a>
                                </div>
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
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

    <script>
        let sci = document.getElementById('sci');
        let seeSci = document.getElementById('seeSci');
        seeSci.style = 'display:none';
        sci.addEventListener('change', function(e) {
            console.log(this.value)
            if (this.value == 'default') {
                seeSci.style = 'display:none';
            } else {
                seeSci.style = 'display:inherit';
            }
        })
    </script>
@endsection
