@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('checkPassword') }}">
    @csrf
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password">
    <button type="submit">Soumettre</button>
</form>

@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
@endsection