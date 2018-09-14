<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleAndUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
           $table ->unsignedInteger('roles_id');
           $table ->foreign('roles_id')->references('id')->on('roles')->onDelete('CASCADE');
           $table ->unsignedInteger('user_id');
           $table ->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
           $table ->primary(['roles_id','user_id']);
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
        Schema::dropIfExists('role_user');
    }
}
