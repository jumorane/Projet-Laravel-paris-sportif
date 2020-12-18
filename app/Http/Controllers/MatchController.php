<?php

namespace App\Http\Controllers;

use App\Match;
use Illuminate\Http\Request;


class MatchController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['index', 'show']);
        $this->middleware('auth')->except(['index']);

    }
   
    public function index()
    {
        
        $matchs = Match::inRandomOrder()->take(6)->paginate(4);
        return view('matchs.index')->with('matchs' , $matchs);


    }


    public function create()
    {
        return view('matchs.create');
        
    }

    public function store(Request $request)
    {
        $request=request()->validate([
            'nom'=>'required',
            'cote'=>'required',
            'equipe'=>'required'
        ]);
        Match::create($request);
        return redirect()->route('matchs.index');
    }

  
    public function show(Match $match)
    {
        return view('matchs.show',compact('match'));
    }

  
    public function edit(Match $match)
    {
        return view('matchs.edit',compact('match'));

    }

    public function update(Request $request, Match $match)
    {
        $request=request()->validate([
            'nom'=>'required',
            'cote'=>'required',
            'equipe'=>'required',
        ]);
        $match->update($request);
        return redirect()->route('matchs.show', $match->id);
    }


    public function destroy(Match $match)
    {
        $match->delete();
        return redirect()->route('matchs.index');
    }


}
