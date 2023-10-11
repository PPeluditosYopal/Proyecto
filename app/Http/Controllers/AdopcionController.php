<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adopcion;

class AdopcionController extends Controller
{
    public function adopcion()
    {
        return view('adopcion');
    }
    public function index()
    {

        return view('adopcion');

    }
    public function show(RegistroMascota $adopcion)
    {

        return view('adopcion', compact('adopcion'));
    }
 
     protected function validator(array $data)
        {
            return Validator::make($data, [
                'nombre' => ['required', 'string', 'max:255'],
                'especie' => ['required', 'string', 'max:255'],
                'raza' => ['required', 'string', 'max:255'],
                'edad' => ['required', 'string', 'max:255'],
                'genero' => ['required', 'string', 'max:255'],
                'ciclo_vacunas' => ['required', 'string', 'max:255'],
                'esterilizado' => ['required', 'string', 'max:255'],
                'condicion' => ['required', 'string', 'max:255'],
                'enfermedades' => ['required', 'string', 'max:255'],
                'observacion' => ['required', 'string','max:255'],
                'custodio' => ['required', 'string', 'max:255'],
                'direccion' => ['required', 'string', 'max:255'],
                'telefono' => ['required', 'string', 'max:255'],
                'TagId' => ['required', 'string', 'max:255'],
            ]);
        }

        protected function create()
            {
                return view('registromascota');

            }
    public function store(Request $request)
    {
        $RegistroMascota = new RegistroMascota;

        $RegistroMascota->nombre = $request->input('nombre');
        $RegistroMascota->especie = $request->input('especie');
        $RegistroMascota->raza = $request->input('raza');
        $RegistroMascota->edad = $request->input('edad');
        $RegistroMascota->genero = $request->input('genero');
        $RegistroMascota->ciclo_vacunas = $request->input('ciclo_vacunas');
        $RegistroMascota->esterilizado = $request->input('esterilizado');
        $RegistroMascota->condicion = $request->input('condicion');
        $RegistroMascota->enfermedades = $request->input('enfermedades');
        $RegistroMascota->observacion = $request->input('observacion');
        $RegistroMascota->custodio = $request->input('custodio');
        $RegistroMascota->direccion = $request->input('direccion');
        $RegistroMascota->telefono = $request->input('telefono');
        $RegistroMascota->TagId = $request->input('TagId');
        $RegistroMascota->save();
        
   

        /*dd($request->all());*/
        /*return view ('registromascota');*/
        return back()->with('registroexitoso', 'Solicitud registrada con Exito!');
    }
}
