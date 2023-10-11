<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use App\Perros;
use App\Models\Especie;
use App\Models\Raza;
use App\Models\RegistroMascota;
use Illuminate\Http\Request;
use App\Http\Controllers\RegMascota;

class RegistroMascotaController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | RegistroMascotaController
    |--------------------------------------------------------------------------
    | Este controlador maneja el registro de nuevas mascotas así como su
    | validación y creación. Por defecto, este controlador utiliza un rasgo para
    | proporcione esta funcionalidad sin requerir ningún código adicional.
    |
    */

public function registromascota()
    {
        return view('registromascota');
    }
    public function index()
    {
        $especies = Especie::all();
        $razas = Raza::all();
        //return view('/registromascota')->with(['especies' => $especies, ]);
        $registromascota = RegistroMascota::all();
        return view('registromascota', compact('registromascota', ['especies', 'razas' ,'registromascota']));
    }

public function show(RegistroMascota $registromascota)
    {

        return view('registromascota', compact('registromascota'));
        //return view('/registromascota')->with(['especies' => $especies, ]);
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
            'TagId' => ['required', 'string', 'max:255', 'unique:registromascota'],
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\RegistroMascota
     */
    protected function create()
    {
        /*array $data
        return RegistroMascota::create([
            'nombre' => $data['nombre'],
            'especie' => $data['especie'],
            'raza' => $data['raza'],
            'edad' => $data['edad'],
            'genero' => $data['genero'],
            'especie' => $data['especie'],
            'ciclo_vacunas' => $data['ciclo_vacunas'],
            'esterilizado' => $data['esterilizado'],
            'condicion' => $data['condicion'],
            'enfermedades' => $data['enfermedades'],
            'observaciones' => $data['observaciones'],
            'custodio' => $data['custodio'],
            'direccion' => $data['direccion'],
            'telefono' => $data['telefono'],
            'TadId' => $data['TadId'],
        ]);*/
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
        
        $especies = Especie::all();
        $razas = Raza::all();
        //return view('/registromascota')->with(['especies' => $especies, ]);
        $registromascota = RegistroMascota::all();
        return view('registromascota', compact('registromascota', ['especies', 'razas' ,'registromascota']));
        /*dd($request->all());*/
        /*return view ('registromascota');*/
        return back()->with('registroexitoso', 'Registrada nueva Mascota con Exito!');
    }
}
