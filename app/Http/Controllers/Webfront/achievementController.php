<?php

namespace App\Http\Controllers\Webfront;

use App\Achievement;
use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class achievementController extends Controller
{
    public function index()
    {

        $achievement = Achievement::get();
        $banner = Banner::first();
        return view('templates.webfront.achievement',compact('achievement','banner'));
    }
    public function detail(Request $request)
    {
        $banner = Banner::first();
        $achievement = Achievement::where('id', $request->id)->first();
        return view('templates.webfront.detailachievement', compact('achievement','banner'));
    }
}
