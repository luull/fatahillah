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
}
