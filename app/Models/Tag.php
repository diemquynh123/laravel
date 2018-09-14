<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Model;

Relation::morphMap([
    'posts' => 'App\Models\Post',
    'products' => 'App\Models\Product',
]);

class Tag extends Model
{
    //
     public function posts()
    {
        return $this->morphedByMany('App\Models\Post', 'taggable');
    }

    public function products()
    {
        return $this->morphedByMany('App\Models\Product', 'taggable');
    }
}
