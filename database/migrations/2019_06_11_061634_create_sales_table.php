<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order_no');
            $table->string('agent');
            $table->string('customer');
            $table->string('status');
            $table->string('product');
            $table->string('sku');
            $table->decimal('total_award_point');
            $table->integer('discount');
            $table->decimal('subtotal');
            $table->dateTime('order_created_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
