<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteArtikelController extends Controller
{
    public function showArtikel($artikelnummer){
        return view('website.artikel', ['artikelnummer' => $artikelnummer]);
    }
}
