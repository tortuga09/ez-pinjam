<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->string('no_ic');
          $table->string('jawatan');
          $table->string('bahagian');
          $table->string('unit');
          $table->string('no_tel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('no_ic');
          $table->dropColumn('jawatan');
          $table->dropColumn('bahagian');
          $table->dropColumn('unit');
          $table->dropColumn('no_tel');
        });
    }
}
