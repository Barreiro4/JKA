<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GehituLanaTaula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lana', function (Blueprint $table) {
            $table->increments('lana_id');
            $table->string('izena');
            $table->integer('langile_id')->unsigned();
            $table->integer('makina_id')->unsigned();
            
            $table->foreign('langile_id')->references('langile_id')->on('langileak');
            $table->foreign('makina_id')->references('makina_id')->on('makina');
            
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
        Schema::drop('lana');
    }
}
