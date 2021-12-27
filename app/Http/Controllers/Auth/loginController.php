<?php

namespace App\Http\Controllers\Auth;

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
                    session(['admin_data' => $check]);
                    return redirect('/dashboard');
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
}

