<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaDePreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_de_precios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('path', 255);
            $table->string('file_extension', 8);
            
        });
        Schema::table('users', function (Blueprint $table){
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lista_de_precios');
    }
}
