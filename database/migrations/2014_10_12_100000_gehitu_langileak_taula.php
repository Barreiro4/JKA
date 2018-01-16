<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GehituLangileakTaula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langileak', function (Blueprint $table) {
            $table->increments('id');
            $table->string('izena');
            $table->string('abizena');
            $table->string('dpto');
            $table->string('arduraduna');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('langileak');
    }
}
