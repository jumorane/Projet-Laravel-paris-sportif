@extends('layouts.app')
@section('titre')
    Creer un match
@endsection
@section('content')

    <form method="POST" action=" {{route("matchs.store")}} ">
        @csrf
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
        <button type="submit" class="btn btn-primary">Creer</button>

    </form>

@endsection
