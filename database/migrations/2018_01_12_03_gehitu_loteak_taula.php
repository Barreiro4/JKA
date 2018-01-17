<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GehituLoteakTaula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loteak', function (Blueprint $table) {
            $table->increments('lote_id');
            $table->string('arduraduna');
            $table->string('materiala');
            $table->string('hasiera_data');
            $table->string('bukaera_data');
            $table->string('emaitza');
            $table->string('almazen_kokapena');
            $table->timestamps();
        });
        
        Schema::create('egin', function (Blueprint $table) {
            $table->integer('lana_id')->unsigned();
            $table->integer('lote_id')->unsigned();
            $table->string('data');
            
            $table->foreign('lana_id')->references('lana_id')->on('lana');
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
        Schema::drop('loteak');
    }
}