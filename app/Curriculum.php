<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $table = "curriculum";
    protected $guarded = ['id'];
    public $timestamps = false;
}
