<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialQuimico extends Model
{
    protected $table = 'material_quimico';

    protected $fillable = [
        'nombre',
        'material',
        'capacidad',
        'marca',
        'cantidad'
    ];
}
