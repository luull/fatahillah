<?php

namespace App\Http\Controllers\Webfront;

use App\About;
use App\Banner;
use App\Configuration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $config = Configuration::first();
        session(['logo' => $config->logo]);
        $banner = Banner::get();
        $about = About::first();
        return view('templates.webfront.home',compact('config','banner','about'));
    }
}
