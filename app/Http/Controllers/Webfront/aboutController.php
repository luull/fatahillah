<?php

namespace App\Http\Controllers\Webfront;

use App\About;
use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index()
    {

        $about = About::first();
        $banner = Banner::first();
        return view('templates.webfront.about',compact('about','banner'));
    }
}
