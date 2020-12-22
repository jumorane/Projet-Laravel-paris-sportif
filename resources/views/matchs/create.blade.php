@extends('layouts.app')
@section('titre')
    Creer un match
@endsection
@section('content')

    <form method="POST" action=" {{route('matchs.store')}} " enctype="multipart/form-data">
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

        <div class="form-group">
            <label for="image">Importez une image</label>
            <div class="custom-file">
                <input type="file" id="image" name="image" class="custom-file-input @error('image')
                is-invalid @enderror" id="validatedCustomFile">
                <label class="custom-file-label" for="validatedCustomFile">Choisir une image</label>
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Creer</button>
          <a class="btn btn-primary"href="{{route('matchs.index')}}">Retour à l'accueil</a>
          

    </form>

@endsection
