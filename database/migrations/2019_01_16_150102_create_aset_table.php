<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aset_nb', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nb_nama');
            $table->string('nb_sykt');
            $table->string('nb_title');
            $table->string('nb_status')->default('ada');
            $table->integer('id_permohonan')->default(0);
            $table->timestamps();
        });

        Schema::create('aset_lcd', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lcd_nama');
            $table->string('lcd_sykt');
            $table->string('lcd_title');
            $table->string('lcd_status')->default('ada');
            $table->integer('id_permohonan')->default(0);
            $table->timestamps();
        });

        Schema::create('aset_print', function (Blueprint $table) {
            $table->increments('id');
            $table->string('print_nama');
            $table->string('print_sykt');
            $table->string('print_title');
            $table->string('print_status')->default('ada');
            $table->integer('id_permohonan')->default(0);
            $table->timestamps();
        });

        Schema::create('aset_present', function (Blueprint $table) {
            $table->increments('id');
            $table->string('present_nama');
            $table->string('present_sykt');
            $table->string('present_title');
            $table->string('present_status')->default('ada');
            $table->integer('id_permohonan')->default(0);
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
        Schema::dropIfExists('aset_nb');
        Schema::dropIfExists('aset_lcd');
        Schema::dropIfExists('aset_print');
        Schema::dropIfExists('aset_present');
    }
}
