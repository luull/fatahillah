<?php

namespace App\Http\Controllers\Webfront;

use App\About;
use App\Banner;
use App\Configuration;
use App\Event;
use App\Http\Controllers\Controller;
use App\Logo;
use App\News;
use App\Photo;
use App\Video;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $banner = Banner::get();
        $about = About::first();
        $news = News::offset(0)->limit(6)->get();
        $logo = Logo::offset(0)->limit(6)->get();
        $event = Event::offset(0)->limit(6)->get();
        $photo = Photo::offset(0)->limit(6)->get();
        $video = Video::offset(0)->limit(6)->get();
        return view('templates.webfront.home',compact('banner','about','news','event','photo','video','logo'));
    }
}
