<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = "teacher";
    protected $guarded = ['id'];
    public $timestamps = false;
}
