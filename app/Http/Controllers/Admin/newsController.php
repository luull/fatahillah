<?php

namespace App\Http\Controllers\Admin;

use App\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class newsController extends Controller
{
    public function index()
    {
        if(session('admin_data') == null){
            return redirect('/login');
        }
        if(session('config') == null){
            return redirect('/login');
        }
        $data = News::all();
        return view('templates.admin.news', compact('data'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'body' => 'required',
        ]);
        $image = '';
        if ($request->hasfile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('news'), $imageName);
            $image = "news/$imageName";
        }
        $hsl = News::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $image,
            'created_by' => session('admin_data')->username
        ]);
        if($hsl){
            return redirect()->back()->with(['message' => 'Berita Berhasil ditambah', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Berita Gagal ditambah', 'color' => 'alert-danger']);
        }
    }
    public function find(Request $req)
    {
        $hsl = News::find($req->id);
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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'body' => 'required',
        ]);
        $image = '';
        if ($request->hasfile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('news'), $imageName);
            $image = "news/$imageName";
        }else {
           $image = $request->default;
        }
        $hsl = News::find($request->id)->update([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $image,
        ]);
        if($hsl){
            return redirect()->back()->with(['message' => 'Berita Berhasil diubah', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Berita Gagal diubah', 'color' => 'alert-danger']);
        }
    }
    public function delete(Request $request)
    {
        $get = News::where('id', $request->id)->first();
        $hsl = unlink(public_path($get->image));
        if($hsl){
            News::find($request->id)->delete();
            return redirect()->back()->with(['message' => 'Berita Berhasil dihapus', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Berita Gagal dihapus', 'color' => 'alert-danger']);
        }
    }
}
