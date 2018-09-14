<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesAndPermissionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('roles', function (Blueprint $table) {
            $table ->increments('id');
            $table ->string('title');
            $table->timestamps();
         });
          Schema::create('permissions', function (Blueprint $table) {
            $table ->increments('id');
            $table ->string('title');//tên quyền
            $table ->string('url');
            $table->timestamps();
         });
    }

    /**
     * Reverse the migrationsi
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::dropIfExists('roles');
         Schema::dropIfExists('permissions');
    }
}
