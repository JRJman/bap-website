<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MijnAccountInstellingenController extends Controller
{
    public function showPage() {
        return view('mijnaccount');
    }
}
