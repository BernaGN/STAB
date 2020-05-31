<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PracticaSustanciaQuimica extends Model
{
    protected $table = 'practica-sustancia-quimica';

    protected $fillable = [
        'equipo_id',
        'sustancia_id',
        'practica_id'
    ];
}
