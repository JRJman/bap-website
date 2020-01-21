<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteAccountController extends Controller
{
    public function showPage($accountId){
        return view('website.account', ['accountId' => $accountId]);
    }
}
