<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('client_id');
            $table->string('business_name', 255);
            $table->string('direction', 255);
            $table->unsignedBigInteger('business_type_id');
            $table->string('client_name', 255)->nullable();
            $table->string('client_phone', 255)->nullable();
            $table->string('client_email', 255)->nullable();
            $table->float('client_balance', 8, 2);
            $table->tinyInteger('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
