<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $table = "configuration";
    protected $guarded = ['id'];
    public $timestamps = false;
}
