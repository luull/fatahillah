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
            $request->image->move(public_path('images'), $imageName);
            $image = "/images/$imageName";

        }else {
            $image = $request->default;
        }
        $hsl = About::find($request->id)->update([
            'body' => $request->body,
            'vission' => $request->vission,
            'mission' => $request->mission,
            'image' => $image,
        ]);
        if($hsl){
            return redirect()->back()->with(['message' => 'Data has been updated', 'color' => 'alert-success']);
        }else{
            return redirect()->back()->with(['message' => 'Data has been updated', 'color' => 'alert-danger']);

        }

}
}
