<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raza;


Route::get('/', function(){

    $razas = Raza::all();
return view('/registromascota')->with(['razas' => $razas, ]);

});

class RazaController extends Controller
{
    public function index()
    {

        $razas = Raza::all();
        return view('/registromascota')->with(['razas' => $razas, ]);
    }
}
