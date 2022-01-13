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
        if(session('admin_data')->level == 0){
            return redirect()->back()->with(['message' => 'Akses tidak diperbolehkan', 'color' => 'alert-danger']);
        }
        $data = Configuration::first();
        return view('templates.admin.configuration', compact('data'));
    }
    public function update(Request $request){
            $request->validate([
                'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $logo = '';
            if ($request->hasfile('logo')) {
                $logoName = time().'.'.$request->logo->extension();
                $request->logo->move(public_path('logo'), $logoName);
                $logo = "/logo/$logoName";

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
                'embedmaps' => $request->embedmaps,
            ]);
            if($hsl){
                $get = Configuration::where('id', $request->id)->first();
                session(['config' => $get]);
                return redirect()->back()->with(['message' => 'Data Berhasil diubah', 'color' => 'alert-success']);
            }else{
                return redirect()->back()->with(['message' => 'Data Berhasil diubah', 'color' => 'alert-danger']);

            }

    }
}
