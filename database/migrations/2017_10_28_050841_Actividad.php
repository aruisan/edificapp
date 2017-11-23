<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Actividad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre', 80);
            $table->timestamps();
            $table->integer('especializacion_id')->unsigned();
            $table->foreign('especializacion_id')->references('id')->on('especializacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('actividad');
    }
}
