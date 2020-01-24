<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;

class WebsiteHomeController extends Controller
{
    public function showPage(){
        $products = Product::paginate(5);

        return view('website.home', ['producten' => $products]);
    }
}
