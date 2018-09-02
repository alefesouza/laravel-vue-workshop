<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{

    public function hello() {
        return 'Hello World';
    }

    public function json() {
        return ['key' => 'value', 'key2' => 'value2'];
    }

    public function users() {
        $users = User::all();

        return view('users', ['users' => $users]);
    }

}
