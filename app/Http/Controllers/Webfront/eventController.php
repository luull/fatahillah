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

        $event = Event::get();
        $banner = Banner::first();
        return view('templates.webfront.event',compact('event','banner'));
    }
    public function detail(Request $request)
    {
        $banner = Banner::first();
        $event = Event::where('id', $request->id)->first();
        return view('templates.webfront.detailevent', compact('event','banner'));
    }
}
