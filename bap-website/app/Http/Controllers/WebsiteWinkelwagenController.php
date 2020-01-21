<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteWinkelwagenController extends Controller
{
    public function showPage(){
        return view('website.winkelwagen');
    }
}
