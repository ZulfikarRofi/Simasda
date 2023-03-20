<?php

namespace App\Exports;

use App\Models\Datakader;
use Maatwebsite\Excel\Concerns\FromCollection;

class DatakaderExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Datakader::all();
    }
}
