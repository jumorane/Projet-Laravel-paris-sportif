@extends('layouts.app')
@section('titre')
    Afficher les utilisateurs

@endsection
@section('content')


    <table class="table text-center">
        
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Date création compte</th>
                <th scope="col">Changement</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row"> {{ $user->id }} </th>
                    <td><a href=" {{route("users.show", $user->id)}} ">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td><form action=" {{ route('users.destroy', $user->id) }} " method="post">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                
                    </form></td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
