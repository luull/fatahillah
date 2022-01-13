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
        if(session('admin_data')->level == 0){
            return redirect()->back()->with(['message' => 'Akses tidak diperbolehkan', 'color' => 'alert-danger']);
        }
        $data = Service::all();
        return view('templates.admin.service', compact('data'));
    }
    public function delete(Request $request)
    {
        $hsl = Service::find($request->id)->delete();
        if($hsl){
            return redirect()->back()->with(['message' => 'Data Berhasil dihapus', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Data Gagal dihapus', 'color' => 'alert-danger']);
        }
    }
}
