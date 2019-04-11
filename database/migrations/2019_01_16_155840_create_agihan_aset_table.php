<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgihanAsetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agihan_nb', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_permohonan');
            $table->string('item');
            $table->string('peg_keluar');
            $table->string('tarikh_pulang')->nullable();
            $table->string('peg_pulang')->nullable();
            $table->string('catatan')->nullable();
            $table->timestamps();
        });

        Schema::create('agihan_lcd', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_permohonan');
            $table->string('item');
            $table->string('peg_keluar');
            $table->string('tarikh_pulang')->nullable();
            $table->string('peg_pulang')->nullable();
            $table->string('catatan')->nullable();
            $table->timestamps();
        });

        Schema::create('agihan_print', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_permohonan');
            $table->string('item');
            $table->string('peg_keluar');
            $table->string('tarikh_pulang')->nullable();
            $table->string('peg_pulang')->nullable();
            $table->string('catatan')->nullable();
            $table->timestamps();
        });

        Schema::create('agihan_present', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_permohonan');
            $table->string('item');
            $table->string('peg_keluar');
            $table->string('tarikh_pulang')->nullable();
            $table->string('peg_pulang')->nullable();
            $table->string('catatan')->nullable();
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
        Schema::dropIfExists('agihan_nb');
        Schema::dropIfExists('agihan_lcd');
        Schema::dropIfExists('agihan_print');
        Schema::dropIfExists('agihan_present');
    }
}
