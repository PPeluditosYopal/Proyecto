<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadisticaController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | RegistroMascotaController
    |--------------------------------------------------------------------------
    | Este controlador permite interactuar con la data almacenada dentro de la
    | tabla registromascota, para graficarla y que sea visualmente entendible 
    | para el usuario.
    |
    */
    public function estadistica()
    {
        return view('estadistica');
    }
    public function index()
    {


        return view('estadistica');
    }
    public function store(Request $request)
    {
        
        $Estadistica->tipo_reporte = $request->input('tipo_reporte');
        $Estadistica->fecha_ini = $request->input('fecha_ini');
        $Estadistica->fecha_fin = $request->input('fecha_fin');
        $Estadistica->save();
        
    }
}

