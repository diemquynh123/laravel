<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $table = "countries";
    protected $primaryKey = "id";
    protected $guarded = [];
    public function posts()
    {
        return $this->hasManyThrough('App\Models\Post', 'App\User','country_id','user_id','id');
    }
    
}
