<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PracticaMaterialQuimico extends Model
{
    protected $table = 'practica-material-quimico';

    protected $fillable = [
        'equipo_id',
        'material_id',
        'practica_id'
    ];
}
