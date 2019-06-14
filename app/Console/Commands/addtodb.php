<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\sales;
//use Excel;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\salesExport;
use App\Exports\sales2Export;
use Illuminate\Support\Facades\DB;

class addtodb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'add json record to db';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return 
     * 
     * mixed
     */
    public function handle()
    {
        $sales = public_path("sales/orders-20190602.json");
        $json = file_get_contents(public_path("sales/orders-20190602.json"));
	$objs = json_decode($json,true);
        $list =  DB::table('sales')->get();
//        $list =  DB::table('sales')->keys()->toArray(); 
        $list = json_decode($list, true);
        $test = new salesExport;
//        return $test->store('invoices.csv', \Maatwebsite\Excel\Excel::CSV);
        return Excel::store(new salesExport, "sales.xlsx");
//                return Excel::store(new sales2Export, "sales3.xlsx");
        

        $file = fopen("contacts.csv","w");

        foreach ($list as $line)
        {
      //  fputcsv($file,explode(',',$line));
          fputcsv($file,$line);
        }
  
        fclose($file); 

        foreach ($salesreports as $salesreport)  { 
//            $this->line($salesreport->order_no);
        }
	foreach ($objs as $obj)  { 
            
//            foreach ($obj as $obj2)  { 
//                DB::table('sales')->insert([
//                    'order_no' => $obj2["ORDER_NO"],
//                    'agent' => $obj2["AGENT"],
//                    'customer' => $obj2["CUSTOMER"],
//                    'status' => $obj2["STATUS"],
//                    'product' => $obj2["PRODUCT"],
//                    'sku' => $obj2["SKU"],
//                    'total_award_point' => $obj2["TOTAL_AWARD_POINT"],
//                    'discount' => $obj2["DISCOUNT"],
//                    'subtotal' => $obj2["SUBTOTAL"],
//                    'order_created_at' => $obj2["ORDER_CREATED_AT"],
//                ]); 
//            }

	}

    }
}
