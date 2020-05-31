<?php

namespace App\Imports;

use App\MaterialQuimico;
use Maatwebsite\Excel\Concerns\ToModel;

class MaterialesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MaterialQuimico([
            "nombre" => $row[1],
            "material" => $row[2],
            "capacidad" => $row[3],
            "marca" => $row[4],
            "cantidad" => $row[5],
        ]);
    }
}
