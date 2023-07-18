@extends('layouts.app')

@section('content')


    <div class='container text-center'>
        <div class="row">
            <div class="col s12">
                <h1>Liste des biens</h1>
                <a href="/properties/new" class='btn btn-primary'>ajouter un properties</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <table class='table'>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>type</th>
                            <th>nom</th>
                            
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

@endsection

