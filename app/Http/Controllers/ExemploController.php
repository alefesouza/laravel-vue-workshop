<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExemploController extends Controller
{

    public function index($numero) {
        return view('exemplo', ['numero' => $numero]);
    }

}
