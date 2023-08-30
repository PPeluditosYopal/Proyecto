<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use App\Models\Alerta;
use Illuminate\Http\Request;
use App\Http\Controllers\Alert;

class AlertaController extends Controller
{
    public function alerta()
    {
        return view('alerta');
    }
    public function index()
    {
        $alerta = Alerta::all();
        return view('alerta', compact('alerta'));
    }

public function show(Alerta $alerta)
    {
        
        return view('alerta', compact('alerta'));
    }

 protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'telfono' => ['required', 'string', 'max:255'],
            'dir_evento' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'evidencia' => ['required', 'string', 'max:255'],
            'terminis' => ['required', 'string', 'max:255'],

        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\alerta
     */
    protected function create()
    {
        /*array $data
        return Alerta::create([
            'TadId' => $data['TadId'],
            'nombre' => $data['nombre'],
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
            'telefono' => $data['telefono'],
            'direccion' => $data['direccion'],
        ]);*/
        return view('alerta');

    }
    public function store(Request $request)
    {
        $Alerta = new Alerta;
        $Alerta->nombre = $request->input('nombre');
        $Alerta->telefono = $request->input('telefono');
        $Alerta->dir_evento = $request->input('dir_evento');
        $Alerta->description = $request->input('description');
        $Alerta->evidencia = $request->input('evidencia');
        $Alerta->terminos = $request->input('terminos');


        $basic  = new \Vonage\Client\Credentials\Basic("a479394e", "0Tb1cD2ubUDkGbrP");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
         new \Vonage\SMS\Message\SMS("573232110331", BRAND_NAME, 'Se acaba de generar una alerta: ' + 'nombre' + 'telefono' + 'dir_evento' + 'description' + 'evidencia' + 'terminos')
         );

        $message = $response->current();

        if ($message->getStatus() == 0) {
                      echo "Su Alerta, se ha enviado con exito\n";
        } else {
                      echo "No fue posible enviar su alerta: " . $message->getStatus() . "\n";
        }

       $Alerta->save();

        /*dd($request->all());*/
        return view('alerta');
    }
}