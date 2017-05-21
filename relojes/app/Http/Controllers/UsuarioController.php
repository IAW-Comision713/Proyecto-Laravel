<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsuarioController extends Controller
{
    public function isLoggedin() {

        $logged;

        if(Auth::check())
            $logged = 'true';
        else
            $logged = 'false';

        return $logged;
    }
}
