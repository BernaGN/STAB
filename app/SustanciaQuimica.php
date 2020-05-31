<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SustanciaQuimica extends Model
{
    protected $table = 'sustancia_quimica';

    protected $fillable = [
        'nombre',
        'formula',
        'cantidad',
        'concentracion'
    ];

    protected $guarded = [];
}
