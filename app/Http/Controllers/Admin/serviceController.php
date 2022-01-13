<?php

namespace App\Http\Controllers\Admin;

use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function index()
    {
        if(session('admin_data') == null){
            return redirect('/login');
        }
        $data = Service::all();
        return view('templates.admin.service', compact('data'));
    }
    public function delete(Request $request)
    {
        $hsl = Service::find($request->id)->delete();
        if($hsl){
            return redirect()->back()->with(['message' => 'service has been deleted', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'service failed deleted', 'color' => 'alert-danger']);
        }
    }
}
