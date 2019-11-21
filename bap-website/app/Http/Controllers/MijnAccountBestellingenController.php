<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MijnAccountBestellingenController extends Controller
{
    public function showPage() {
        return view('mijnaccount');
    }
}
