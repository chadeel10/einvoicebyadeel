<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoiceproducts', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('product_serial');
            $table->string('product_Item');
            $table->integer('product_quantity');
            $table->float('product_unit_price');
            $table->float('product_total');
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
        Schema::dropIfExists('invoiceproducts');
    }
}
