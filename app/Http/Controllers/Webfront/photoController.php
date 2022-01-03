<?php

namespace App\Http\Controllers\Webfront;

use App\Photo;
use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class photoController extends Controller
{
    public function index()
    {

        $photo = Photo::get();
        $banner = Banner::first();
        return view('templates.webfront.photo',compact('photo','banner'));
    }
}
