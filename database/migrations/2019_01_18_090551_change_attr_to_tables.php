<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeAttrToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agihan_nb', function (Blueprint $table) {
            $table->string('item')->nullable()->change();
        });

        Schema::table('agihan_lcd', function (Blueprint $table) {
            $table->string('item')->nullable()->change();
        });

        Schema::table('agihan_print', function (Blueprint $table) {
            $table->string('item')->nullable()->change();
        });

        Schema::table('agihan_present', function (Blueprint $table) {
            $table->string('item')->nullable()->change();
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
