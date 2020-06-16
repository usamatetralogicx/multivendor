<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Title');
            $table->string('Discription');
            $table->string('Price');
            $table->string('Compare_price');
            $table->string('Image');
            $table->string('SKU');
            $table->string('Barcode');
            $table->string('Quantity')->nullable();
            $table->string('Weight')->nullable();
            $table->string('County/zone')->nullable();
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
        Schema::dropIfExists('products');
    }
}
