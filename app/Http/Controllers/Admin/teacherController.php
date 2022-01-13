<?php

namespace App\Http\Controllers\Admin;

use App\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class teacherController extends Controller
{
    public function index()
    {
        if(session('admin_data') == null){
            return redirect('/login');
        }
        $data = Teacher::all();
        return view('templates.admin.teacher', compact('data'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = '';
        if ($request->hasfile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('teacher'), $imageName);
            $image = "teacher/$imageName";
        }
        $hsl = Teacher::create([
            'name' => $request->name,
            'title' => $request->title,
            'category' => $request->category,
            'image' => $image,
            'created_by' => session('admin_data')->username
        ]);
        if($hsl){
            return redirect()->back()->with(['message' => 'teacher has been created', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'teacher failed created', 'color' => 'alert-danger']);
        }
    }
    public function find(Request $req)
    {
        $hsl = Teacher::find($req->id);
        if ($hsl) {
            return response()->json($hsl);
        } else {
            return response()->json(['message' => 'Data tidak ditemukan', 'error' => true]);
        }
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'category' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = '';
        if ($request->hasfile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('teacher'), $imageName);
            $image = "teacher/$imageName";
        }else {
           $image = $request->default;
        }
        $hsl = Teacher::find($request->id)->update([
            'name' => $request->name,
            'title' => $request->title,
            'category' => $request->category,
            'image' => $image,
        ]);
        if($hsl){
            return redirect()->back()->with(['message' => 'teacher has been updated', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'teacher failed updated', 'color' => 'alert-danger']);
        }
    }
    public function delete(Request $request)
    {
        $get = Teacher::where('id', $request->id)->first();
        $hsl = unlink(public_path($get->image));
        if($hsl){
            Teacher::find($request->id)->delete();
            return redirect()->back()->with(['message' => 'teacher has been deleted', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'teacher failed deleted', 'color' => 'alert-danger']);
        }
    }
}
