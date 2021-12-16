<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('admin.index',compact('product'));
    }
}
