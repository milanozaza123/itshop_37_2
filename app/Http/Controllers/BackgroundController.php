<?php

namespace App\Http\Controllers;

use App\Background;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;

class BackgroundController extends Controller
{
    public function index(){
        $background =Background::all();
        return view('admin.background.index',compact('background'));
    }

    public function create(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'status' => 'required',
            'image' => 'mimes:jpeg,bmp,jpg,png,gif|file|max:10000',
      
        ],
        [
            'name.required' => 'กรุณาป้อนชื่อสินค้าก่อน',
            'status.required' => 'กรุณาป้อนรายละเอียดสินค้าก่อน',
            'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,bmp,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
            'image.max' => 'อัพโหลดขนาดภาพไม่เกิน 10 MB ',

        ]
    );
        $background = new Background();
        $background->name = $request->name;
        $background->status = $request->status;
        

        if($request->hasFile('image')){
            $filename =  Str::random(10).'.'.$request->file('image')->getClientOriginalExtension() ; 
            $request->file('image')->move(public_path().'/admin/images/',$filename);
             Image::make(public_path().'/admin/images/'.$filename);
             $background->image = $filename;


        }else{
            $background->image = 'nopic.png';
        }

        $background->save();
        return redirect()->route('backgroundform');

    }
    public function edit($id){
        $editbackground = Background::find($id);
        return view('admin.background.edit',compact('editbackground'));

    }
    public function update(Request $request, $id){
        $validateData = $request->validate([
            'name' => 'required',
            'status' => 'required',
            
            'image' => 'mimes:jpeg,bmp,jpg,png,gif|file|max:10000',
      
        ],
        [
            'name.required' => 'กรุณาป้อนชื่อภาพพื้นหลังก่อน',
            'status.required' => 'กรุณาป้อนรายละเอียดพื้นหลังก่อน',
            'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,bmp,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
            'image.max' => 'อัพโหลดขนาดภาพไม่เกิน 10 MB ',

        ]
        );
    

    if($request->hasFile('image')){
        $background = Background::find($id);
        if($background->image != 'nopic.png'){
            File::delete(public_path().'/admin/images/'.$background->image);
        }
        $filename =  Str::random(10).'.'.$request->file('image')->getClientOriginalExtension() ; 
        $request->file('image')->move(public_path().'/admin/images/',$filename);
         Image::make(public_path().'/admin/images/'.$filename);
         $background->image = $filename;
         $background->name = $request->name;
         $background->status = $request->status;


    }else{
        $background = Background::find($id);
        $background->name = $request->name;
        $background->status = $request->status;
    }

    $background->save();
    return redirect()->route('backgroundform');
}
    public function delete($id){
        $delete = Background::find($id);
        if($delete->image != 'nopic.png'){
            File::delete(public_path().'/admin/images/'.$delete->image);
        }
        $delete->delete();
        return redirect()->route('backgroundform');
}
}
