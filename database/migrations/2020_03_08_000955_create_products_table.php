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
            $table->timestamps();
            $table->unsignedInteger('product_id');
            $table->string('name', 255);
            $table->string('brand', 255);
            $table->unsignedBigInteger('category_id');
            $table->float('price', 8, 2);
            $table->tinyInteger('active');
            $table->unsignedInteger('per_caja')->nullable();            
            $table->tinyInteger('by_weight');
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
