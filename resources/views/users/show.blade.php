@extends('layouts.app')
@section('titre')
    Afficher l'utilisateur

@endsection
@section('content')

    <h1>{{ $user->name }}</h1>
    <ul>
        <li><strong>Email: </strong>{{ $user->email }} </li>
        <li>{{ $user->created_at->format('d/m/Y') }} </li>
        <li>{{ $user->updated_at->format('d/m/Y') }} </li>
    </ul>
    <a href=" {{ route('users.edit', $user->id) }} " class="btn btn-info">Modifier</a>
    <form action=" {{ route('users.destroy', $user->id) }} " method="post">
        @csrf
        @method("delete")
        <button type="submit" class="btn btn-danger">Supprimer</button>

    </form>
@endsection
