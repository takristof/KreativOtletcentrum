<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rendeles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendeles', function (Blueprint $table) {
            $table->id('rendeles_id');
            $table->integer('osszeg');
            $table->integer('felh_id');
            $table->integer('id');
            $table->timestamp('idopont');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
