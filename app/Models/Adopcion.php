<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adopcion extends Model
{
    use HasFactory;

protected $fillable = [


        'nombre',
        'telefono',
        'direccion',
        'correo',
        'tipo_vivienda',
        'nucleo_familiar',
        'con_esterilizacion'
        'mascotas',
        'cant_mascotas',
        'visita_domiciliaria',
    ];
}
