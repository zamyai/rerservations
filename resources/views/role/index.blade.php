@extends('layouts.app')

@section('title', 'Liste des types d’artistes')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <ul>
    @foreach($Roles as $role)
        <li><a href="{{ route('role.show', $role->id) }}">{{ $role->role  }}</a></li>
    @endforeach
    </ul>
@endsection
