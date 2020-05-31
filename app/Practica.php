<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practica extends Model
{
    protected $fillable = [
        'nombre',
        'fecha',
        'hora',
        'persona_id',
        'equipo_id'
    ];
}
