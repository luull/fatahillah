<?php

namespace App\Http\Controllers\Webfront;

use App\Program;
use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class programController extends Controller
{
    public function index()
    {

        $program = Program::get();
        $banner = Banner::first();
        return view('templates.webfront.program',compact('program','banner'));
    }
    public function detail(Request $request)
    {
        $banner = Banner::first();
        $program = Program::where('id', $request->id)->first();
        return view('templates.webfront.detailprogram', compact('program','banner'));
    }
}
