<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GehituBidalketakTaula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidalketak', function (Blueprint $table) {
            $table->increments('lote_id');
            $table->string('nori');
            $table->string('noiz');
            $table->string('zenbat');
            $table->string('arduraduna');
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
        Schema::drop('bidalketak');
    }
}
