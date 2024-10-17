<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTallasTable extends Migration
{   
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tallas', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')->unique(); 
            $table->timestamps(); //TIMESTAMPS(); CREA 2 COLUMNAS (CREATED_AT UPDATE_AT)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tallas');
    }
}
