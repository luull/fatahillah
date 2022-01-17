<?php

namespace App\Http\Controllers\Webfront;

use App\Banner;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function index()
    {

        // dd(session('user-session'));

        $banner = Banner::first();
        return view('templates.webfront.service',compact('banner'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $hsl = Service::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        if($hsl){
            return redirect('/service')->with(['message' => 'Pengaduan Berhasil dikirim', 'color' => 'alert-success']);
        }else{
            return redirect('/service')->with(['message' => 'Pengaduan Gagal dikirim', 'color' => 'alert-danger']);
        }
    }
}
