<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->increments('id');
            $table->char("ruc","11");
            $table->string("razonsocial","250");
            $table->string("direccion","100");
            $table->string("nombrecomercial","80");
            $table->string("telfijo","20");
            $table->string("telmovil","20");
            $table->string("telfax","20");
            $table->string("email","150");
            
            #relaciones
            $table->integer("id_tipopersona")->unsigned();
            $table->foreign("id_tipopersona")->references("id")->on("tipopersona");

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
        Schema::drop('proveedor');
    }
}
