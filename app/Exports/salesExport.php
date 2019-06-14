<?php

namespace App\Exports;

use App\sales;
use Carbon\Carbon;


use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;




use Maatwebsite\Excel\Concerns\FromCollection;



class salesExport implements FromCollection, WithHeadings 
{
    use Exportable;
    public function collection()
    {
        return sales::all()->groupBy('status');
    }
    
    public function headings(): array
    {
        return [
           ['NO.', 'ORDER NO','AGENT','CUSTOMER','STATUS','PRODUCT','SKU','TOTAL AWARD POINT','DISCOUNT','SUBTOTAL','ORDER CREATED AT']
        ];
    }
}