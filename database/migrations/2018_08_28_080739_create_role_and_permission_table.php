<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleAndPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_permission', function (Blueprint $table) {     
           $table ->unsignedInteger('roles_id');
           $table ->foreign('roles_id')->references('id')->on('roles')->onDelete('CASCADE');
           $table ->unsignedInteger('permission_id');
           $table ->foreign('permission_id')->references('id')->on('permissions')->onDelete('CASCADE');
           $table ->primary(['roles_id','permission_id']);
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
        Schema::dropIfExists('role_permission');
    }
}
