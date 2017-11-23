<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Imagenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('imagenes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->char('ruta', 200);
            $table->timestamps();
            $table->integer('proyecto_id')->unsigned();
            $table->foreign('proyecto_id')->references('id')->on('proyectos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proyectos');
    }
}
