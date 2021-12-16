<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Content1;
use App\Background;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $content1 =Content1::all();

        $product = Product::with('Category')->get();

        $background =Background::all();

        return view('welcome',compact('content1','product','background'));
    }
}
