<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curricular extends Model
{
    protected $table = "curricular";
    protected $guarded = ['id'];
    public $timestamps = false;
}
