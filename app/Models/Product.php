<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "products";
    protected $primaryKey = "id";
    protected $guarded = [];
    
     public function comments()
    {
        return $this->morphMany('App\Models\Comment','object');
    }

     public function tags()
    {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
