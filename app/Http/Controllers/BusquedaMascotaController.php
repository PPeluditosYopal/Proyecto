<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusquedaMascota;
use Illuminate\Support\Facades\DB;

class BusquedaMascotaController extends Controller
{
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
