@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifiez votre adresse email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un lien de confirmation a été envoyé sur votre email') }}
                        </div>
                    @endif

                    {{ __('Veuillez cliquer sur le lien de confirmation envoyé dans votre boîte mail') }}
                    {{ __('Si vous navez rien recu') }},s
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Cliquer ici pour reinitialiser le mot de passe') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
