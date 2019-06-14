<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class sales extends Model
{

    public $fillable = ['order_no','agent','customer','product','sku','status','order_created_at','total_award_point','discount','subtotal'];
}