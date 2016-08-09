<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ordenentrada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenentrada', function (Blueprint $table) {
            $table->increments('id');
            $table->char('serie','3');
            $table->char('numero','7');
            $table->boolean('estado');
            $table->string("descripcion");
            
            #relaciones
            $table->integer('id_proveedor')->unsigned();
            $table->foreign('id_proveedor')->references('id')->on('proveedor');
            $table->integer("id_tipocomprobante")->unsigned();
            $table->foreign('id_tipocomprobante')->references('id')->on('tipocomprobante');
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
        Schema::drop('ordenentrada');
    }
}
