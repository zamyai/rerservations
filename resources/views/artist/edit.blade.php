@extends('layouts.main')

@section('title', 'Modifier un artiste')

@section('content')
    <h2>Modifier un artiste</h2>

    <form action="{{ route('artist.update' ,$artist->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="firstname" 
	       @if(old('firstname'))
                value="{{ old('firstname') }}" 
            @else
  value="{{ $artist->firstname }}" 
            @endif
	           class="@error('firstname') is-invalid @enderror">

	@error('firstname')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <div>
            <label for="lastname">Nom</label>
            <input type="text" id="lastname" name="lastname" 
	       @if(old('lastname'))
                value="{{ old('lastname') }}" 
            @else
                value="{{ $artist->lastname }}" 
            @endif
	           class="@error('lastname') is-invalid @enderror">

	@error('lastname')
            <div class="alert alert-danger">{{ $message }}</div>
     @enderror
        </div>

        <button>Modifier</button>
   <a href="{{ route('artist.show',$artist->id) }}">Annuler</a>
    </form>

@if ($errors->any())
    <div class="alert alert-danger">
	   <h2>Liste des erreurs de validation</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <nav><a href="{{ route('artist.index') }}">Retour à l'index</a></nav>
@endsection