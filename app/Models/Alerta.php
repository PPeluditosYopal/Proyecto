<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    use HasFactory;

    protected $fillable = [

        'nombre',
        'telefono',
        'dir_evento',
        'description',
        'evidencia',
        'terminos',
    ];

    protected $table ='alerta';
}
