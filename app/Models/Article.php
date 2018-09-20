<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = "articles";
    protected $primaryKey = "id";
    protected $fillable = ['name','text'];
}
