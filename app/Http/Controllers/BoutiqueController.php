<?php

namespace App\Http\Controllers;

use App\Match;
use Illuminate\Http\Request;

class BoutiqueController extends Controller
{
    public function index()
    {
        $matchs = Match::all();
        return view('boutique.index', compact('matchs'));
    }
}
