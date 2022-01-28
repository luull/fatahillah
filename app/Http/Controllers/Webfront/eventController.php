<?php

namespace App\Http\Controllers\Webfront;

use App\Event;
use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class eventController extends Controller
{
    public function index()
    {
        if(session('config') == null){
            return redirect('/');
        }
        $event = Event::get();
        $banner = Banner::first();
        return view('templates.webfront.event',compact('event','banner'));
    }
    public function detail(Request $request)
    {
        if(session('config') == null){
            return redirect('/');
        }
        $banner = Banner::first();
        $event = Event::where('id', $request->id)->first();
        return view('templates.webfront.detailevent', compact('event','banner'));
    }
}
