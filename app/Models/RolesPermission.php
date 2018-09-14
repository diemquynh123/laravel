<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolesPermission extends Model
{
    //
    protected $table = "role_permission";
    protected $primaryKey = ["roles_id","permission_id"];
    public $incrementing = false;
    protected $guarded = [];
}
