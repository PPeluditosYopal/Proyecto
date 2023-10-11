<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusquedaMascota;
use Illuminate\Support\Facades\DB;

class BusquedaMascotaController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | RegistroMascotaController
    |--------------------------------------------------------------------------
    | Este controlador muestra los datos almacenados en la tabla registromascota,
    | mediente una tabla.
    | Esta información puede ser filtrada por una un dato especifico, en este caso
    | el codigo unico del tagrfid.
    |
    */

    public function busquedamascota()
    {
        return view('busquedamascota');
    }


    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $busquedamascotas=DB::table('registromascota')

                            ->select('id','TagId','nombre','especie','raza','edad','genero','ciclo_vacunas','esterilizado','condicion','enfermedades','observacion','custodio','direccion','telefono')
                            ->where('TagId', 'LIKE', '%'.$texto.'%')
                            ->orWhere('TagId', 'LIKE', '%'.$texto.'%')
                            ->orderBy('TagId', 'asc')
                            ->paginate(10);

        return view('busquedamascota', compact('busquedamascotas', 'texto'));
    }
}
