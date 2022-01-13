<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class eventController extends Controller
{
    public function index()
    {
        if(session('admin_data') == null){
            return redirect('/login');
        }
        $data = Event::all();
        return view('templates.admin.event', compact('data'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'time' => 'required',
            'body' => 'required',
        ]);
        $image = '';
        if ($request->hasfile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('event'), $imageName);
            $image = "event/$imageName";
        }
        $hsl = Event::create([
            'title' => $request->title,
            'body' => $request->body,
            'date' => $request->date,
            'time' => $request->time,
            'image' => $image,
            'created_by' => session('admin_data')->username
        ]);
        if($hsl){
            return redirect()->back()->with(['message' => 'Acara Berhasil ditambah', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Acara Gagal ditambah', 'color' => 'alert-danger']);
        }
    }
    public function find(Request $req)
    {
        $hsl = Event::find($req->id);
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
            'date' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'time' => 'required',
            'body' => 'required',
        ]);
        $image = '';
        if ($request->hasfile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('event'), $imageName);
            $image = "event/$imageName";
        }else {
           $image = $request->default;
        }
        $hsl = Event::find($request->id)->update([
            'title' => $request->title,
            'body' => $request->body,
            'date' => $request->date,
            'time' => $request->time,
            'image' => $image,
        ]);
        if($hsl){
            return redirect()->back()->with(['message' => 'Acara Berhasil diubah', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Acara Gagal diubah', 'color' => 'alert-danger']);
        }
    }
    public function delete(Request $request)
    {
        $get = Event::where('id', $request->id)->first();
        $hsl = unlink(public_path($get->image));
        if($hsl){
            Event::find($request->id)->delete();
            return redirect()->back()->with(['message' => 'Acara Berhasil dihapus', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Acara Gagal dihapus', 'color' => 'alert-danger']);
        }
    }
}
