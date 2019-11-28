<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showPage1(){
        return view('view1');
    }
    public function showPage2(){
        return view('view2');
    }
    public function showPage3(){
        return view('view3');
    }
}
