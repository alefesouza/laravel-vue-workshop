<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ExemploController extends Controller
{

    public function index($numero) {
        $numArray = ['Alefe', 'Souza', 9, 8, 4, 5, 1];
        $user = User::find(1);

        return view('exemplo', [
            'numero' => $numero,
            'numArray' => $numArray,
            'user' => $user,
        ]);
    }

}
