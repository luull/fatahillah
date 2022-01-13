<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use App\Configuration;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('templates.auth.login');
    }
    public function login(Request $request){
        $validate = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        if($validate){
            $check = Admin::where('username', $request->username)->first();
            if($check){
                if (Hash::check($request->password, $check->password)) {
                    $get = Configuration::first();
                    session(['admin_data' => $check]);
                    session(['config' => $get]);
                    return redirect('/admin/dashboard');
                }else{
                    return redirect()->back()->with(['message' => 'Kata sandi salah', 'color' => 'alert-danger']);
                }
            }else {
                return redirect()->back()->with(['message' => 'Nama salah', 'color' => 'alert-danger']);
            }
        }else {
           return redirect()->back()->with(['message' => 'Nama dan Kata sandi wajib diisi', 'color' => 'alert-warning']);
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login')->with(['message' => 'Berhasil keluar', 'color' => 'alert-success']);
    }
    public function changepass()
    {
        return view('templates.admin.changepass');
    }
    public function proseschange(Request $request)
    {

        $request->validate([
            'old_password' => 'required',
            'password' => 'required',
            'password1' => 'required'
        ]);
        $old = $request->old_password;
        $pwd = $request->password;
        $pwd2 = $request->password1;
        $data = Admin::where('username', session('admin_data')->username)->first();
        $getid = Admin::where('username', session('admin_data')->username)->first()->id;
        if ($data) {
            if (Hash::check($old, $data->password )) {
                if (Hash::check($pwd, $data->password )) {
                    return redirect()->back()->with(['message' => 'Kata sandi sama', 'color' => 'alert-warning']);
                }elseif (Hash::check($pwd2, $data->password )) {
                    return redirect()->back()->with(['message' => 'Kata sandi sama', 'color' => 'alert-warning']);
                }else {
                    if($pwd != $pwd2){
                        return redirect()->back()->with(['message' => 'Kata sandi tidak sama', 'color' => 'alert-warning']);
                    }else {
                        $hsl = Admin::where('id', $getid)->update([
                            'password' => bcrypt($pwd)
                        ]);
                        if($hsl){
                            $request->session()->flush();
                            return redirect('/login')->with(['message' => 'Ubah kata sandi berhasil', 'color' => 'alert-success']);
                        }
                    }
                }
            }else {
                return redirect()->back()->with(['message' => 'Kata sandi lama anda salah', 'color' => 'alert-danger']);
            }
        }

    }
}

