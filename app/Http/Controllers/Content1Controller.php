<?php

namespace App\Http\Controllers;

use App\Content1;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;

class Content1Controller extends Controller
{
    public function index(){
        $content1 =Content1::all();
        return view('admin.content1.index',compact('content1'));
    }

    public function indexhome(){
        $content1 =Content1::all();
        return view('welcome',compact('content1'));
    }


    public function create(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,bmp,jpg,png,gif|file|max:10000',
      
        ],
        [
            'name.required' => 'กรุณาป้อนชื่อสินค้าก่อน',
            'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,bmp,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
            'image.max' => 'อัพโหลดขนาดภาพไม่เกิน 10 MB ',

        ]
    );
        $content1 = new Content1();
        $content1->name = $request->name;

        if($request->hasFile('image')){
            $filename =  Str::random(10).'.'.$request->file('image')->getClientOriginalExtension() ; 
            $request->file('image')->move(public_path().'/admin/images/',$filename);
             Image::make(public_path().'/admin/images/'.$filename);
             $content1->image = $filename;


        }else{
            $content1->image = 'nopic.png';
        }

        $content1->save();
        return redirect()->route('content1form');

    }
    public function edit($id){
        $editcontent1 = Content1::find($id);
        return view('admin.content1.edit',compact('editcontent1'));

    }
    public function update(Request $request, $id){
        $validateData = $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,bmp,jpg,png,gif|file|max:10000',
      
        ],
        [
            'name.required' => 'กรุณาป้อนชื่อสินค้าก่อน',
            'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,bmp,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
            'image.max' => 'อัพโหลดขนาดภาพไม่เกิน 10 MB ',

        ]
        );
    

    if($request->hasFile('image')){
        $content1 = Content1::find($id);
        if($content1->image != 'nopic.png'){
            File::delete(public_path().'/admin/images/'.$content1->image);
        }
        $filename =  Str::random(10).'.'.$request->file('image')->getClientOriginalExtension() ; 
        $request->file('image')->move(public_path().'/admin/images/',$filename);
         Image::make(public_path().'/admin/images/'.$filename);
         $content1->image = $filename;
         $content1->name = $request->name;

    }else{
        $content1 = Content1::find($id);
        $content1->name = $request->name;
   
    }

    $content1->save();
    return redirect()->route('content1form');
}
    public function delete($id){
        $delete = Content1::find($id);
        if($delete->image != 'nopic.png'){
            File::delete(public_path().'/admin/images/'.$delete->image);
        }
        $delete->delete();
        return redirect()->route('content1form');
}
}
