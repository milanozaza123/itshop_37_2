<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;

class ProductController extends Controller
{
    public function index(){
        
        return view('admin.product.index')->with('categories',Category::all());
    }
   


    public function create(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'image' => 'mimes:jpeg,bmp,jpg,png,gif|file|max:10000',
      
        ],
        [
            'name.required' => 'กรุณาป้อนชื่อสินค้าก่อน',
            'description.required' => 'กรุณาป้อนรายละเอียดสินค้าก่อน',
            'category.required' => 'กรุณาป้อนประเภทสินค้าก่อน',
            'price.required' => 'กรุณาป้อนราคาสินค้าก่อน',
            'price.numeric' => 'ป้อนได้เฉพาะตัวเลข',
            'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,bmp,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
            'image.max' => 'อัพโหลดขนาดภาพไม่เกิน 10 MB ',

        ]
    );
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category ;

        if($request->hasFile('image')){
            $filename =  Str::random(10).'.'.$request->file('image')->getClientOriginalExtension() ; 
            $request->file('image')->move(public_path().'/admin/images/',$filename);
             Image::make(public_path().'/admin/images/'.$filename);
             $product->image = $filename;


        }else{
            $product->image = 'nopic.png';
        }

        $product->save();
        return redirect()->route('index');

    }
    public function edit($id){
        $editproduct = Product::find($id);
        return view('admin.product.edit',compact('editproduct'))->with('categories',Category::all());

    }
    public function update(Request $request, $id){
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'image' => 'mimes:jpeg,bmp,jpg,png,gif|file|max:10000',
      
        ],
        [
            'name.required' => 'กรุณาป้อนชื่อสินค้าก่อน',
            'description.required' => 'กรุณาป้อนรายละเอียดสินค้าก่อน',
            'category.required' => 'กรุณาป้อนประเภทสินค้าก่อน',
            'price.required' => 'กรุณาป้อนราคาสินค้าก่อน',
            'price.numeric' => 'ป้อนได้เฉพาะตัวเลข',
            'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,bmp,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
            'image.max' => 'อัพโหลดขนาดภาพไม่เกิน 10 MB ',

        ]
        );
    

    if($request->hasFile('image')){
        $product = Product::find($id);
        if($product->image != 'nopic.png'){
            File::delete(public_path().'/admin/images/'.$product->image);
        }
        $filename =  Str::random(10).'.'.$request->file('image')->getClientOriginalExtension() ; 
        $request->file('image')->move(public_path().'/admin/images/',$filename);
         Image::make(public_path().'/admin/images/'.$filename);
         $product->image = $filename;
         $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->category_id = $request->category ;


    }else{
        $product = Product::find($id);
        $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->category_id = $request->category ;
    }

    $product->save();
    return redirect()->route('index');
}
    public function delete($id){
        $delete = Product::find($id);
        if($delete->image != 'nopic.png'){
            File::delete(public_path().'/admin/images/'.$delete->image);
        }
        $delete->delete();
        return redirect()->route('index');
}
}
