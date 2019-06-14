<?php

namespace App\Exports;

use App\sales;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class sales2Export implements FromQuery, WithHeadings
{
    use Exportable;

    public function query()
    {
//        return sales::query();
        return sales::query();
    }
    
     public function headings(): array
    {
        return [
           ['NO.', 'ORDER NO','AGENT','CUSTOMER','STATUS','PRODUCT','SKU','TOTAL AWARD POINT','DISCOUNT','SUBTOTAL','ORDER CREATED AT']
        ];
    }
}