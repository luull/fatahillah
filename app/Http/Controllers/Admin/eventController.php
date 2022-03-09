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
        if(session('config') == null){
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
            return redirect()->back()->with(['message' => 'Kegiatan Berhasil ditambah', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Kegiatan Gagal ditambah', 'color' => 'alert-danger']);
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
            return redirect()->back()->with(['message' => 'Kegiatan Berhasil diubah', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Kegiatan Gagal diubah', 'color' => 'alert-danger']);
        }
    }
    public function delete(Request $request)
    {
        $get = Event::where('id', $request->id)->first();
        $hsl = unlink(public_path($get->image));
        if($hsl){
            Event::find($request->id)->delete();
            return redirect()->back()->with(['message' => 'Kegiatan Berhasil dihapus', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Kegiatan Gagal dihapus', 'color' => 'alert-danger']);
        }
    }
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('/upload/event'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('upload/event/' . $fileName);
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url')</script>";
            echo $response;
        }
    }
    public function uploadfile(Request $request)
    {
            $request->hasfile('image');
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('upload/event'), $imageName);
            return redirect()->back()->with(['message' => 'Data Berhasil di upload', 'color' => 'alert-success']);
    }
    public function file_browse(Request $req)
    {
        if(session('admin_data') == null){
            return redirect('/login');
        }
        $r_path = $req->path;
        if (empty($r_path)) {
            $r_path = "upload/event";
        }
        $path = public_path('/' . $r_path);
        $files = scandir($path);
        return view('templates.admin.file_browse', compact('files', 'r_path'));
    }
}
