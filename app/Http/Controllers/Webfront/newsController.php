<?php

namespace App\Http\Controllers\Webfront;

use App\News;
use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class newsController extends Controller
{
    public function index()
    {

        $news = News::get();
        $banner = Banner::first();
        return view('templates.webfront.news',compact('news','banner'));
    }
    public function detail(Request $request)
    {
        $banner = Banner::first();
        $news = News::where('id', $request->id)->first();
        return view('templates.webfront.detailnews', compact('news','banner'));
    }
}
