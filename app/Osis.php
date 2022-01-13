<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Osis extends Model
{
    protected $table = "osis";
    protected $guarded = ['id'];
    public $timestamps = false;
}
