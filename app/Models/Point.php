<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
class Point extends Model
{
    protected $table = "points";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function image(){
    	return $this->belongsTo('App\Models\Image');
    }
}
