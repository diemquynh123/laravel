<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //
    protected $table = "phones";
    protected $primaryKey = "id";
    protected $guarded = [];
}
