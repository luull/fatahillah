<?php

namespace App\Http\Controllers\Webfront;

use App\Curriculum;
use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class curriculumController extends Controller
{
    public function index()
    {

        $curriculum = Curriculum::get();
        $banner = Banner::first();
        return view('templates.webfront.curriculum',compact('curriculum','banner'));
    }
    public function detail(Request $request)
    {
        $banner = Banner::first();
        $curriculum = Curriculum::where('id', $request->id)->first();
        return view('templates.webfront.detailcurriculum', compact('curriculum','banner'));
    }
}
