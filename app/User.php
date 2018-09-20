<?php

namespace App;
use App\Models\Permission;
use App\Models\Roles;
use App\Models\Country;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function role(){
        return $this->belongsToMany(Roles::class,'role_user');
    }

     public function phones()
    {
        return $this->hasOne('App\Models\Phone','user_id','id');
    }

    public function hasPermission(Permission $permission){
        if(!$this->role){
            return false;
        } 

          if(!$permission->role){
            return false;
          }
        foreach ($this->role as $roles) {
            if($permission ->role->contains($roles)){
                return true;
            }
        }
   
        return false;

    }

     public function getFullNameAttribute(){
         return "hoa anh";
    }
}
