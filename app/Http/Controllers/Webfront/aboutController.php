<?php

namespace App\Http\Controllers\Webfront;

use App\About;
use App\Banner;
use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index()
    {

        $about = About::first();
        $banner = Banner::first();
        $teacher = Teacher::get();
        return view('templates.webfront.about',compact('about','banner','teacher'));
    }
}
