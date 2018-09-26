<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Point;
class Image extends Model
{
     protected $table = "images";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function point(){
    	return $this->hasMany('App\Models\Point');
    }
}
