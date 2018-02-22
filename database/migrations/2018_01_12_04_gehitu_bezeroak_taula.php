<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GehituBezeroakTaula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bezeroak', function (Blueprint $table) {
            $table->increments('bezero_id');
            $table->string('izena');
            $table->string('helbidea');
            $table->timestamps();
        });
        
        Schema::create('bidali', function (Blueprint $table) {
            $table->increments('id_bid');
            $table->integer('bezero_id')->unsigned();
            $table->integer('lote_id')->unsigned();
            $table->string('data');
            $table->integer('kopurua');
            
            $table->foreign('bezero_id')->references('bezero_id')->on('bezeroak');
            $table->foreign('lote_id')->references('lote_id')->on('loteak');
            
          
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
        Schema::drop('bezeroak');
    }
}
