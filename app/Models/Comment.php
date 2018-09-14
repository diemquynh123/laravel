<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Model;

Relation::morphMap([
    'posts' => 'App\Models\Post',
    'products' => 'App\Models\Product',
]);

class Comment extends Model
{
    //
    public function object()
    {
        return $this->morphTo();
    }
}
