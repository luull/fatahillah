<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        if(session('admin_data') == null){
            return redirect('/login');
        }
        if(session('admin_data')->level == 0){
            return redirect()->back()->with(['message' => 'Akses tidak diperbolehkan', 'color' => 'alert-danger']);
        }
        $data = Admin::all();
        return view('templates.admin.user', compact('data'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
        ]);
        $get = Admin::where('username', $request->username)->first();
        if($get){
            return redirect()->back()->with(['message' => 'Nama sudah terdaftar', 'color' => 'alert-warning']);
        }else {
            $hsl = Admin::create([
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'level' => $request->level,
            ]);
        }
        if($hsl){
            return redirect()->back()->with(['message' => 'Data Berhasil ditambah', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Data Gagal ditambah', 'color' => 'alert-danger']);
        }
    }
    public function find(Request $req)
    {
        $hsl = Admin::find($req->id);
        if ($hsl) {
            return response()->json($hsl);
        } else {
            return response()->json(['message' => 'Data tidak ditemukan', 'error' => true]);
        }
    }
    public function update(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'level' => 'required',
        ]);
            $hsl = Admin::find($request->id)->update([
                'username' => $request->username,
                'level' => $request->level,
            ]);
        if($hsl){
            return redirect()->back()->with(['message' => 'Data Berhasil diubah', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Data Gagal diubah', 'color' => 'alert-danger']);
        }
    }
    public function delete(Request $request)
    {
        $hsl = Admin::find($request->id)->delete();
        if($hsl){
            return redirect()->back()->with(['message' => 'Data Berhasil dihapus', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Data Gagal dihapus', 'color' => 'alert-danger']);
        }
    }
}
