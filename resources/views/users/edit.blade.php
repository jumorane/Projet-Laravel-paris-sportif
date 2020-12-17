@extends('layouts.app')
@section('titre')
    Modifier l'utilisateur

@endsection
@section('content')

    <form method="POST" action=" {{ route('users.update', $user->id) }} ">
        @csrf
        @method("patch")
        <div class="col-12">
            <label for="inputAddress" class="form-label">Nom</label>
            <input type="text" class="form-control" id="inputAddress" name='name' placeholder="insérer le nom">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="insérer le mail" name='email' placeholder="insérer le mail">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="insérer le mot de passe" name='password'
                placeholder="insérer le mot de passe">
        </div>


        <button type="submit" class="btn btn-primary">Mettre à jour</button>

    </form>


@endsection
