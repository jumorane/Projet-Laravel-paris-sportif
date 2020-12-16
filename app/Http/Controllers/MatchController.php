<?php

namespace App\Http\Controllers;

use App\Match;
use Illuminate\Http\Request;

class MatchController extends Controller
{
   
    public function index()
    {
        $matchs=Match::all();
        return view('matchs.index',compact('matchs'));

    }


    public function create()
    {
        return view('match.create');
        
    }

    public function store(Request $request)
    {
        $request=request()->validate([
            'nom'=>'required',
            'cote'=>'required',
            'equipe'=>'required'
        ]);
        Match::create($request);
        return redirect()->route('match.index');
    }

  
    public function show(Match $match)
    {
        return view('match.show',compact('match'));
    }

  
    public function edit(Match $match)
    {
        return view('match.edit',compact('match'));

    }

    public function update(Request $request, Match $match)
    {
        $request=request()->validate([
            'nom'=>'required',
            'cote'=>'required',
            'equipe'=>'required',
        ]);
        $match->update($request);
        return redirect()->route('match.show');
    }


    public function destroy(Match $match)
    {
        $match->delete();
        return redirect()->route('match.index',compact('match'));
    }


}
