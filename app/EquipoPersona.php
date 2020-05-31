<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipoPersona extends Model
{
    protected $table = 'equipo-personas';

    protected $fillable = [
        'equipo_id',
        'persona_id'
    ];
}
