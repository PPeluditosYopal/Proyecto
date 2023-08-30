<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especie;


Route::get('/', function(){

    $especies = Especie::all();
return view('/registromascota')->with(['especies' => $especies, ]);

});

class EspecieController extends Controller
{
    public function index()
    {

        $especies = Especie::all();
        return view('/registromascota')->with(['especies' => $especies, ]);
    }
}
