<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index(){
        if(session('admin_data') == null){
            return redirect('/login');
        }
        if(session('config') == null){
            return redirect('/login');
        }
        $data = About::first();
        return view('templates.admin.about', compact('data'));
    }
    public function update(Request $request){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = '';
        if ($request->hasfile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('profil'), $imageName);
            $image = "/profil/$imageName";

        }else {
            $image = $request->default;
        }
        $hsl = About::find($request->id)->update([
            'title' => $request->title,
            'body' => $request->body,
            'vission' => $request->vission,
            'mission' => $request->mission,
            'image' => $image,
        ]);
        if($hsl){
            return redirect()->back()->with(['message' => 'Data Berhasil diubah', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Data Gagal diubah', 'color' => 'alert-danger']);

        }

    }
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('/upload/about'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('upload/about/' . $fileName);
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url')</script>";
            echo $response;
        }
    }
    public function uploadfile(Request $request)
    {
            $request->hasfile('image');
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('upload/about'), $imageName);
            return redirect()->back()->with(['message' => 'Data Berhasil di upload', 'color' => 'alert-success']);
    }
    public function file_browse(Request $req)
    {
        if(session('admin_data') == null){
            return redirect('/login');
        }
        $r_path = $req->path;
        if (empty($r_path)) {
            $r_path = "upload/about";
        }
        $path = public_path('/' . $r_path);
        $files = scandir($path);
        return view('templates.admin.file_browse', compact('files', 'r_path'));
    }
}
