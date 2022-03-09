<?php

namespace App\Http\Controllers\Admin;

use App\Ppdb;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ppdbController extends Controller
{
    public function index()
    {
        if(session('admin_data') == null){
            return redirect('/login');
        }
        $data = Ppdb::first();
        return view('templates.admin.ppdb', compact('data'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'brosur' => 'max:2048',
            'formulir' => 'max:2048',
            'body' => 'required',
        ]);
        if(session('config') == null){
            return redirect('/login');
        }
        $brosur = '';
        if ($request->hasfile('brosur')) {
            $brosurName = time().'.'.$request->brosur->extension();
            $request->brosur->move(public_path('ppdb'), $brosurName);
            $brosur = "ppdb/$brosurName";
        }else {
           $brosur = $request->default_brosur;
        }
        $formulir = '';
        if ($request->hasfile('formulir')) {
            $formulirName = time().'.'.$request->formulir->extension();
            $request->formulir->move(public_path('ppdb'), $formulirName);
            $formulir = "ppdb/$formulirName";
        }else {
           $formulir = $request->default_formulir;
        }
        $hsl = Ppdb::find($request->id)->update([
            'title' => $request->title,
            'body' => $request->body,
            'brosur' => $brosur,
            'formulir' => $formulir,
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
            $request->file('upload')->move(public_path('/upload/ppdb'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('upload/ppdb/' . $fileName);
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url')</script>";
            echo $response;
        }
    }
    public function uploadfile(Request $request)
    {
            $request->hasfile('image');
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('upload/ppdb'), $imageName);
            return redirect()->back()->with(['message' => 'Data Berhasil di upload', 'color' => 'alert-success']);
    }
    public function file_browse(Request $req)
    {
        if(session('admin_data') == null){
            return redirect('/login');
        }
        $r_path = $req->path;
        if (empty($r_path)) {
            $r_path = "upload/ppdb";
        }
        $path = public_path('/' . $r_path);
        $files = scandir($path);
        return view('templates.admin.file_browse', compact('files', 'r_path'));
    }
}
