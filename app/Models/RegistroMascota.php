<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Especie;

class RegistroMascota extends Model
{
    use HasFactory;

    protected $fillable = [

        
        'nombre',
        'especie',
        'raza',
        'edad',
        'genero',
        'ciclo_vacunas',
        'esterilizado',
        'condicion',
        'enfermedades',
        'observacion',
        'custodio',
        'direccion',
        'telefono',
        'TagId',

    ];
    protected $table ='registromascota';
}
