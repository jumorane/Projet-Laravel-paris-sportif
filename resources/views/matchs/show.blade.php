@extends('layouts.app')
@section('titre')
    Afficher un match
@endsection
@section('content')
    {{ $match->nom }}
    {{ $match->cote }}
    {{ $match->equipe }}
    {{ $match->image }}
    <a href=" {{route('matchs.edit', $match->id)}} " class="btn btn-info">Modifier</a>
    <a href=" {{route('matchs.edit', $match->cote)}} " class="btn btn-info">Parier</a>
    <form action=" {{route('matchs.destroy', $match->id)}} " method="post">
        @csrf
        @method("delete")
        <button type="submit" class="btn btn-danger">Supprimer</button>
    
    </form>
    <form action="{{route('cart.store')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value=" {{$match->id}} ">
        <input type="hidden"  name="nom" value=" {{$match->nom}} ">
        <input type="hidden"  name="cote" value=" {{$match->cote}} ">
        <button type="submit" class="btn btn-danger"> Miser</button>
    </form>
        
   
@endsection
