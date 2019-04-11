<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemLulussTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_luluss', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_permohonan');
          $table->integer('bil_nb');
          $table->string('note_nb')->nullable();
          $table->integer('bil_lcd');
          $table->string('note_lcd')->nullable();
          $table->integer('bil_print');
          $table->string('note_print')->nullable();
          $table->integer('bil_present');
          $table->string('note_present')->nullable();
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
        Schema::dropIfExists('item_luluss');
    }
}
