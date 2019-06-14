<?php

namespace App\Exports;

use App\sales;
use Maatwebsite\Excel\Concerns\FromCollection;

class salesExport implements FromCollection
{
    public function collection()
    {
        return sales::all();
    }
}