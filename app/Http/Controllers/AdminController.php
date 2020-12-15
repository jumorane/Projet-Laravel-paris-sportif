<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   
    public function index()
    {
        $matchs=Match::all();
        return view('admin.index',compact('matchs'));

    }


    public function create()
    {
      
    }

 
    public function store(Request $request)
    {
        //
    }

  
    public function show(Match $match)
    {
        return view('admin.show',compact('match'));
    }

  
    public function edit(Match $match)
    {
        return view('admin.edit',compact('match'));

    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Match $match)
    {
        $match->delete();
        return redirect()->route('admin.index',compact('match'));
    }
}
