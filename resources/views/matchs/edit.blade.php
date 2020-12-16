@extends('layouts.layout')
@section('titre')
    Modifier un match
@endsection
@section('content')

    <form method="POST" action=" {{ route('matchs.update', $match->id) }} ">
        @csrf
        @method("patch")
        <div class="form-group">
            <label for="formGroupExampleInput">nom</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="nom" placeholder="Inserez le nom">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">cote</label>
            <input type="number" class="form-control" id="formGroupExampleInput2" name="cote" placeholder="Inserez la cote">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">equipe</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="equipe" placeholder="Inserez le pays">
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>

    </form>

@endsection
