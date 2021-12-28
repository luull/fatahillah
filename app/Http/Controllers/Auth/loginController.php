<?php

namespace App\Http\Controllers\Auth;

use App\Configuration;
use App\Http\Controllers\Controller;
use App\User;
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
            $check = User::where('username', $request->username)->first();
            if($check){
                if (Hash::check($request->password, $check->password)) {
                    $get = Configuration::first();
                    session(['admin_data' => $check]);
                    session(['config' => $get]);
                    return redirect('/admin/dashboard');
                }else{
                    return redirect()->back()->with(['message' => 'Wrong Password', 'color' => 'alert-danger']);
                }
            }else {
                return redirect()->back()->with(['message' => 'Wrong Username', 'color' => 'alert-danger']);
            }
        }else {
           return redirect()->back()->with(['message' => 'Username or Password is Required', 'color' => 'alert-warning']);
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login')->with(['message' => 'Logout success', 'color' => 'alert-success']);
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
        $data = User::where('username', session('admin_data')->username)->first();
        $getid = User::where('username', session('admin_data')->username)->first()->id;
        if ($data) {
            if (Hash::check($old, $data->password )) {
                if (Hash::check($pwd, $data->password )) {
                    return redirect()->back()->with(['message' => 'Password is same', 'color' => 'alert-warning']);
                }elseif (Hash::check($pwd2, $data->password )) {
                    return redirect()->back()->with(['message' => 'Password is same', 'color' => 'alert-warning']);
                }else {
                    if($pwd != $pwd2){
                        return redirect()->back()->with(['message' => 'Password is not same', 'color' => 'alert-warning']);
                    }else {
                        $hsl = User::where('id', $getid)->update([
                            'password' => bcrypt($pwd)
                        ]);
                        if($hsl){
                            $request->session()->flush();
                            return redirect('/login')->with(['message' => 'Change password success', 'color' => 'alert-success']);
                        }
                    }
                }
            }else {
                return redirect()->back()->with(['message' => 'Old Password is wrong', 'color' => 'alert-danger']);
            }
        }

    }
}

