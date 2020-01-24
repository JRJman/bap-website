<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;

class WebsiteArtikelController extends Controller
{
    public function showArtikel($artikelnummer){
        $product = Product::find($artikelnummer);

        return view('website.artikel', ['product' => $product]);
    }
}
