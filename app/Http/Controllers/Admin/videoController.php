<?php

namespace App\Http\Controllers\Admin;

use App\Video;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class videoController extends Controller
{
    public function index()
    {
        if(session('admin_data') == null){
            return redirect('/login');
        }
        $data = Video::all();
        return view('templates.admin.video', compact('data'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required',

        ]);
        $hsl = Video::create([
            'title' => $request->title,
            'link' => $request->link,
            'created_by' => session('admin_data')->username
        ]);
        if($hsl){
            return redirect()->back()->with(['message' => 'video has been created', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'video failed created', 'color' => 'alert-danger']);
        }
    }
    public function find(Request $req)
    {
        $hsl = Video::find($req->id);
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
            'link' => 'required',
        ]);

        $hsl = Video::find($request->id)->update([
            'title' => $request->title,
            'link' => $request->link,
            'created_by' => session('admin_data')->username
        ]);
        if($hsl){
            return redirect()->back()->with(['message' => 'video has been updated', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'video failed updated', 'color' => 'alert-danger']);
        }
    }
    public function delete(Request $request)
    {
        $hsl = Video::find($request->id)->delete();
        if($hsl){
            return redirect()->back()->with(['message' => 'video has been deleted', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'video failed deleted', 'color' => 'alert-danger']);
        }
    }
}
