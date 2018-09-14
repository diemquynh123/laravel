<?php

namespace App\Models;
use App\Models\Roles;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    protected $table = "permissions";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function role(){
        return $this->belongsToMany(Roles::class,'role_permission');
    }

}
