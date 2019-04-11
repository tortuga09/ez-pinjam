<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agihans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_permohonan');
            $table->string('nb1', 50)->nullable();
            $table->string('nb2', 50)->nullable();
            $table->string('nb3', 50)->nullable();
            $table->string('nb4', 50)->nullable();
            $table->string('nb5', 50)->nullable();
            $table->string('nb6', 50)->nullable();
            $table->string('nb7', 50)->nullable();
            $table->string('lcd1', 50)->nullable();
            $table->string('lcd2', 50)->nullable();
            $table->string('lcd3', 50)->nullable();
            $table->string('lcd4', 50)->nullable();
            $table->string('lcd5', 50)->nullable();
            $table->string('print1', 50)->nullable();
            $table->string('print2', 50)->nullable();
            $table->string('print3', 50)->nullable();
            $table->string('print4', 50)->nullable();
            $table->string('present1', 50)->nullable();
            $table->string('present2', 50)->nullable();
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
        Schema::dropIfExists('agihans');
    }
}
