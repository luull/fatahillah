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
            return redirect()->back()->with(['message' => 'news has been created', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'news failed created', 'color' => 'alert-danger']);
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
            return redirect()->back()->with(['message' => 'news has been updated', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'news failed updated', 'color' => 'alert-danger']);
        }
    }
    public function delete(Request $request)
    {
        $hsl = News::find($request->id)->delete();
        if($hsl){
            return redirect()->back()->with(['message' => 'news has been deleted', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'news failed deleted', 'color' => 'alert-danger']);
        }
    }
}
