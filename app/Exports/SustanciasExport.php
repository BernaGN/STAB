<?php

namespace App\Exports;

use App\SustanciaQuimica;
use Maatwebsite\Excel\Concerns\FromCollection;

class SustanciasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SustanciaQuimica::all();
    }
}
