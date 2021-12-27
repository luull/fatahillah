<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        if(session('admin_data') == null){
            return redirect('/login');
        }
        return view('templates.admin.dashboard');
    }
}
