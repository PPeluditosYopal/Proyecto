<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadistica extends Model
{
    use HasFactory;
    protected $fillable = [

        'tipo_reporte',
        'fecha_ini',
        'fecha_fin',

    ];
}
