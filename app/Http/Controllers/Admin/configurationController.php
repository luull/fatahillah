<?php

namespace App\Http\Controllers\Admin;

use App\Configuration;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class configurationController extends Controller
{
    public function index(){
        if(session('admin_data') == null){
            return redirect('/login');
        }
        $data = Configuration::first();
        return view('templates.admin.configuration', compact('data'));
    }
    public function update(Request $request){
            $logo = '';
            if ($request->hasfile('logo')) {
                $request->validate([
                    'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $logoName = time().'.'.$request->logo->extension();
                $request->logo->move(public_path('images'), $logoName);
                $logo = "/images/$logoName";
            }else {
                $logo = $request->default;
            }
            $hsl = Configuration::find($request->id)->update([
                'name' => $request->name,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'kontak' => $request->kontak,
                'wa' => $request->wa,
                'fb' => $request->fb,
                'ig' => $request->ig,
                'alamat' => $request->alamat,
                'logo' => $logo,
            ]);
            if($hsl){
                session(['config' => $hsl]);
                return redirect()->back()->with(['message' => 'Data has been updated', 'color' => 'alert-success']);
            }else{
                return redirect()->back()->with(['message' => 'Data has been updated', 'color' => 'alert-danger']);

            }

    }
}
