<?php

namespace App\Http\Controllers\Webfront;

use App\Configuration;
use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index()
    {

        $configuration =Configuration::first();
        $banner = Banner::first();
        return view('templates.webfront.contact',compact('configuration','banner'));
    }
}
