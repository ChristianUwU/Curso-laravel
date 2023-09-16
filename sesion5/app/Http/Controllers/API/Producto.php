<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Producto extends Controller
{
    public function mostrarProductos(){
        //return json laravel response
        return response()->json(
            [
            'name' => 'Christian',
            'state' => 'BC'
            ]
        );
    }
}
