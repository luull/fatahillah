<?php

namespace App\Http\Controllers\Webfront;

use App\Video;
use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class videoController extends Controller
{
    public function index()
    {

        $video = Video::get();
        $banner = Banner::first();
        return view('templates.webfront.video',compact('video','banner'));
    }
}
