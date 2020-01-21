<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteHomeController extends Controller
{
    public function showPage(){
        return view('website.home');
    }
}
