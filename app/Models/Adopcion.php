<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adopcion extends Model

/*

     Este modelo hace referencia a la tabla adopcion.
     Tabla que almacena la información registrada de las solicitudes de adopción, ingresadas por el usuario.

     Identificador:RF3

    */

{
    use HasFactory;

protected $fillable = [
   
    /*
     Definimos los variables que se almacenaran en la base de datos.
    */


        'nombre',
        'apellidos',
        'direccion',
        'correo',
        'estado_civil',
        'profesion',
        'hijos',
        'tipo_vivienda',
        'nucleo_familiar',
        'con_esterilizacion',
        'decision_adoptar',
        'nombre_mascota',
        'motivos_adopcion',
        'ambiente_mascota',
        'custodio_mascota',
        'tiempo_mascota',
        'vacaciones',
        'animales',
        'sola_mascota',
        'alimento_mascota',
        'necesidades_mascota',
        'experiencia_negativa',
        'alergia_mascota',


    ];

    /*
     Aqui definimos el nombre de la tabla a la cual se almacenaran las variables.
    */
     
    protected $table ='adopcion';


}
