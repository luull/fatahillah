<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $table = "achievement";
    protected $guarded = ['id'];
    public $timestamps = false;
}
