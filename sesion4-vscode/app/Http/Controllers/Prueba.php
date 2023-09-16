<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Prueba extends Controller
{
    public function desplegar(){
        return view('prueba');
    }

    public function hello(){
        return view('hello');
    }
}
