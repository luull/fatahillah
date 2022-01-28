<?php

namespace App\Http\Controllers\Webfront;

use App\Curricular;
use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class curricularController extends Controller
{
    public function index()
    {
        if(session('config') == null){
            return redirect('/');
        }
        $curricular = Curricular::get();
        $banner = Banner::first();
        return view('templates.webfront.curricular',compact('curricular','banner'));
    }
    public function detail(Request $request)
    {
        if(session('config') == null){
            return redirect('/');
        }
        $banner = Banner::first();
        $curricular = Curricular::where('id', $request->id)->first();
        return view('templates.webfront.detailcurricular', compact('curricular','banner'));
    }
}
