@extends('layouts.app')

@section('title', 'Liste des types d’artistes')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <ul>
    @foreach($Localities as $locality)
        <li><a href="{{ route('locality.show', $locality->id) }}">{{ $locality->locality}}</a></li>
    @endforeach
    </ul>
@endsection
