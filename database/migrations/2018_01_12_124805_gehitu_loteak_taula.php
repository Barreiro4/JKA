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
            $table->string('noiz');
            $table->string('emaitza');
            $table->string('alma_non');
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
