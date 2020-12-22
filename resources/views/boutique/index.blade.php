@extends('layouts.app')
@section('titre')
    Afficher les matchs

@endsection


    <div class="row mb-2">
            @foreach ($matchs as $match)
                <div class="col-md-6">
                    <div
                        class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">

                            <h3 class="mb-0">{{ $match->nom }} </h3>
                            <div class="mb-1 text-muted">{{ $match->created_at->format('d/m/Y') }} </div>
                            <img src="{{ asset('storage') . '/' . $match->image }}" 
                            style="width: 65px; height: 65px">
                            <p class="lead my-3"> {{ $match->equipe }} gagnant: </p>
                            <button class="btn btn-info"> {{ $match->cote }} </button>
                            <form action=" {{ route('cart.store') }} " method="POST">
                                @csrf
                                <input type="hidden" name="id" value=" {{ $match->id }} ">
                                <input type="hidden" name="nom" value=" {{ $match->nom }} ">
                                <input type="hidden" name="cote" value=" {{ $match->cote }} ">
                                <button type="submit" class="btn btn-danger"> Miser</button>
                            </form>


                            <a href=" {{ route('matchs.show', $match->id) }} " class="stretched-link">En savoir plus</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src=" {{ $match->image }} " alt>

                        </div>
                    </div>
                </div>

            @endforeach
    </div>



