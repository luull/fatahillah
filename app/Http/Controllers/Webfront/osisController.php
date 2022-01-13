<?php

namespace App\Http\Controllers\Webfront;

use App\Osis;
use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class osisController extends Controller
{
    public function index()
    {

        $osis = Osis::get();
        $banner = Banner::first();
        return view('templates.webfront.osis',compact('osis','banner'));
    }
    public function detail(Request $request)
    {
        $banner = Banner::first();
        $osis = Osis::where('id', $request->id)->first();
        return view('templates.webfront.detailosis', compact('osis','banner'));
    }
}
