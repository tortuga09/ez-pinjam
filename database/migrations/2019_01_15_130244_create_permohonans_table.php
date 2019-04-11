<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref');
            $table->string('apply_date', 10);
            $table->string('nama');
            $table->string('jawatan');
            $table->string('bahagian');
            $table->string('unit');
            $table->string('notel', 12);
            $table->string('email');
            $table->string('tujuan');
            $table->string('masa', 10);
            $table->string('tarikh_pinjam', 10);
            $table->string('tarikh_pulang', 10);
            $table->string('location');
            $table->string('bil_nb', 2);
            $table->string('bil_lcd', 2);
            $table->string('bil_print', 2);
            $table->string('bil_present', 2);
            $table->string('status')->default('Permohonan Baru');
            $table->string('sebab')->default('Permohonan Baru');
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
        Schema::dropIfExists('permohonans');
    }
}
