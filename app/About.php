<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = "about";
    protected $guarded = ['id'];
    public $timestamps = false;
}
