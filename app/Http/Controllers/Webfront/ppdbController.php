<?php

namespace App\Http\Controllers\Webfront;

use App\Ppdb;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ppdbController extends Controller
{
    public function index()
    {
        if(session('config') == null){
            return redirect('/');
        }
        $ppdb = Ppdb::first();
        return view('templates.webfront.ppdb', compact('ppdb'));
    }
}
