<?php

namespace App\Models;
use App\Models\Permission;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //
     public function permission(){
        return $this->belongsToMany(Permission::class, 'role_permission');
    }
     public function user(){
        return $this->belongsToMany(User::class, 'role_user');
    }
}
