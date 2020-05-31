<?php

namespace App\Exports;

use App\MaterialQuimico;
use Maatwebsite\Excel\Concerns\FromCollection;

class MaterialesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MaterialQuimico::all();
    }
}
