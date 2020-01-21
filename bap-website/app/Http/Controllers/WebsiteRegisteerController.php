<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteRegisteerController extends Controller
{
    public function showPage(){
        return view('website.registeer');
    }
}
