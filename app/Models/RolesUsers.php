<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleUsers extends Model
{
    //
    protected $table = "role_user";
    protected $primaryKey = ["roles_id","user_id"];
    public $incrementing = false;
    protected $guarded = [];
}

