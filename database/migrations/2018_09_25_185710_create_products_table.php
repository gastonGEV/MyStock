<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id')->unsigned();
            $table->string('barCode', 255)->nullable();
            $table->unsignedInteger('type_id')->nullable();
            $table->foreign('type_id')->references('id')->on('type_products');
            $table->string('name', 255)->nullable();
            $table->integer('cantMin')->nullable();
            $table->float('cost')->nullable();
            $table->unsignedInteger('stock_id')->nullable();
            $table->foreign('stock_id')->references('id')->on('stocks');
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
