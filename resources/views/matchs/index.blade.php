@extends('layouts.app')
@section('titre')
    Afficher les matchs


@endsection
@section('content')

    <table class="table table-striped">
        <th>Nom</th>
        <th>cote</th>
        <th>equipe</th>
        <th>créé le</th>
        @foreach ($matchs as $match)
            <tr>
                <td><a href=" {{route('matchs.show', $match->id)}}">{{ $match->nom }}</a></td>
                <td>{{ $match->cote }}</td>
                <td>{{ $match->equipe }}</td>
                <td>{{ $match->created_at }}</td>
            </tr>
        @endforeach
    </table>




@endsection
