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
        $data = Admin::all();
        return view('templates.admin.user', compact('data'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $get = Admin::where('username', $request->username)->first();
        if($get){
            return redirect()->back()->with(['message' => 'username is already register', 'color' => 'alert-warning']);
        }else {
            $hsl = Admin::create([
                'username' => $request->username,
                'password' => bcrypt($request->password)
            ]);
        }
        if($hsl){
            return redirect()->back()->with(['message' => 'user has been created', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'user failed created', 'color' => 'alert-danger']);
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
        ]);
        $get = Admin::where('username', $request->username)->first();
        if($get){
            return redirect()->back()->with(['message' => 'username is already register', 'color' => 'alert-warning']);
        }else {
            $hsl = Admin::find($request->id)->update([
                'username' => $request->username,
            ]);
        }
        if($hsl){
            return redirect()->back()->with(['message' => 'user has been updated', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'user failed updated', 'color' => 'alert-danger']);
        }
    }
    public function delete(Request $request)
    {
        $hsl = Admin::find($request->id)->delete();
        if($hsl){
            return redirect()->back()->with(['message' => 'user has been deleted', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'user failed deleted', 'color' => 'alert-danger']);
        }
    }
}
