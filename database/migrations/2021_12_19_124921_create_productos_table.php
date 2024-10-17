<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10);
            //$table->string('color',20);
            $table->integer('precio');
            $table->string('descripcion',50);
            //$table->unsignedBigInteger('id_inventario');
            $table->unsignedBigInteger('id_marca');
            //$table->unsignedBigInteger('id_descuento');
            //$table->unsignedBigInteger('id_talla');
            //$table->unsignedBigInteger('id_categoria');
           // $table->unsignedBigInteger('id_subcategoria');

            $table->string('foto');
           // $table->foreign('id_inventario')->on('inventarios')->references('id')->onDelete('cascade');
            $table->foreign('id_marca')->on('marcas')->references('id')->onDelete('cascade');
            //$table->foreign('id_descuento')->on('descuentos')->references('id')->onDelete('cascade');
           // $table->foreign('id_talla')->on('tallas')->references('id')->onDelete('cascade');
           // $table->foreign('id_categoria')->on('categorias')->references('id');
           // $table->foreign('id_subcategoria')->on('sub_categorias')->references('id');
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
        Schema::dropIfExists('productos');
    }
}
