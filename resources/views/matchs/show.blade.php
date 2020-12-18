@extends('layouts.app')
@section('titre')
    Afficher un match
@endsection
@section('content')
    {{ $match->nom }}
    {{ $match->cote }}
    {{ $match->equipe }}
    <a href=" {{route("matchs.edit", $match->id)}} " class="btn btn-info">Modifier</a>
    <a href=" {{route("matchs.edit", $match->cote)}} " class="btn btn-info">Parier</a>
    <form action=" {{route('matchs.destroy', $match->id)}} " method="post">
        @csrf
        @method("delete")
        <button type="submit" class="btn btn-danger">Supprimer</button>
    
    </form>
   
@endsection
