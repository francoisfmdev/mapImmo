@extends('layouts.app')

@section('content')
    <div class='container text-center'>
        <div class="row">
            <div class="col s12">
                <h1>Bienvenue Admin</h1>
                <h1>Liste des biens</h1>
                <a href="/properties/new" class='btn btn-primary'>ajouter un bien</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('sciBy') }}" method="GET">
                    <select name="sci" id="sci" class="form-select">
                        <option value="" >Choix de la SCI</option>
                        @foreach ($scis as $sci)
                            
                            <option value="{{ $sci->id }}">{{ $sci->name }}</option>
                        @endforeach
                    </select>
                    <button class="col-3 btn btn-primary">Voir la SCI</button>

                </form>
                <table class='table'>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>type</th>
                            <th>nom</th>
                            <th>SCI</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $ide = 1;
                        @endphp
                        @foreach ($properties as $property)
                           

                          
                            <tr>
                                <td>{{ $ide }}</td>
                                <td>{{ $property->type }}</td>
                                <td>{{ $property->nom }}</td>
                                <td>{{ $property->user->name }}</td>

                                <td>
                                    <a href="/update_property/{{ $property->id }}" class="btn btn-info">Modifier</a>
                                    <a href="/delete_property/{{ $property->id }}" class="btn btn-danger">supprimer</a>
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

    <script></script>
@endsection
