<?php

namespace App\Http\Controllers\Admin;

use App\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class bannerController extends Controller
{
    public function index()
    {
        if(session('admin_data') == null){
            return redirect('/login');
        }
        if(session('config') == null){
            return redirect('/login');
        }
        $data = Banner::all();
        return view('templates.admin.banner', compact('data'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = '';
        if ($request->hasfile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('banner'), $imageName);
            $image = "banner/$imageName";
        }
        $hsl = Banner::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
            'created_by' => session('admin_data')->username
        ]);
        if($hsl){
            return redirect()->back()->with(['message' => 'Data Berhasil ditambah', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Data Gagal ditambah', 'color' => 'alert-danger']);
        }
    }
    public function find(Request $req)
    {
        $hsl = Banner::find($req->id);
        if ($hsl) {
            return response()->json($hsl);
        } else {
            return response()->json(['message' => 'Data tidak ditemukan', 'error' => true]);
        }
    }
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = '';
        if ($request->hasfile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('banner'), $imageName);
            $image = "banner/$imageName";
        }else {
           $image = $request->default;
        }
        $hsl = Banner::find($request->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
            'created_by' => session('admin_data')->username
        ]);
        if($hsl){
            return redirect()->back()->with(['message' => 'Data Berhasil diubah', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Data Gagal diubah', 'color' => 'alert-danger']);
        }
    }
    public function delete(Request $request)
    {
        $get = Banner::where('id', $request->id)->first();
        $hsl = unlink(public_path($get->image));
        if($hsl){
            Banner::find($request->id)->delete();
            return redirect()->back()->with(['message' => 'Data Berhasil dihapus', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Data Gagal dihapus', 'color' => 'alert-danger']);
        }
    }
}
