@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Vous êtes à présent connecté') }}
                    <button> <a href="{{route('matchs.create')}}">Créer un match</a></button>
                    <button><a href="http://projet-laravel-paris-sportif.test/matchs">Liste des matchs</a></button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
