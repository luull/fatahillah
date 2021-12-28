<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = "photo";
    protected $guarded = ['id'];
    public $timestamps = false;
}
