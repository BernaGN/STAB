<?php

namespace App\Imports;

use App\SustanciaQuimica;
use Maatwebsite\Excel\Concerns\ToModel;

class SustanciasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new SustanciaQuimica([
            "nombre" => $row[1],
            "formula" => $row[2],
            "cantidad" => $row[3],
            "concentracion" => $row[4],
        ]);
    }
}
