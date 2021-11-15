<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsFirstInEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn(['name']);
            $table->dropColumn(['email']);
            $table->dropColumn(['street']);
            $table->dropColumn(['town']);
            $table->dropColumn(['city']);
            $table->dropColumn(['country']);
            $table->dropColumn(['role']);
            $table->dropColumn(['position']);
            $table->string('first')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            //
        });
    }
}
