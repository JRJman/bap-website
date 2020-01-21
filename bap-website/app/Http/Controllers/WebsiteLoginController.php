<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteLoginController extends Controller
{
    public function showPage(){
        return view('website.login');
    }
}
