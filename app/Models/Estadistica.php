<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadistica extends Model
{

    /*

     Este modelo hace referencia a la tabla estadistica.
     
     Utilizamos solo los campos tipo_reporte, fecha_ini, fecha_fin, 
     las cuales mostrara la información de:
     
     Tipo Especie, Tipo Raza, Genero, Esterilizado, condición, Esquema de Vacunación,
     
     Identificador:RF5

    */

    use HasFactory;
    protected $fillable = [

        'tipo_reporte',
        'fecha_ini',
        'fecha_fin',

    ];

}
