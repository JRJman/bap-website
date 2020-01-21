<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteOverOnsController extends Controller
{
    public function showPage(){
        return view('website.overOns');
    }
}
