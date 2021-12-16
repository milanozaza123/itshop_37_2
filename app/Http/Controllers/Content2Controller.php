<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Content2Controller extends Controller
{
    public function index(){
        return view('admin.content2.index');
    }
}
