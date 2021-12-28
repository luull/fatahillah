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
            return redirect()->back()->with(['message' => 'Event has been created', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Event failed created', 'color' => 'alert-danger']);
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
            return redirect()->back()->with(['message' => 'Event has been updated', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Event failed updated', 'color' => 'alert-danger']);
        }
    }
    public function delete(Request $request)
    {
        $hsl = Event::find($request->id)->delete();
        if($hsl){
            return redirect()->back()->with(['message' => 'Event has been deleted', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Event failed deleted', 'color' => 'alert-danger']);
        }
    }
}
