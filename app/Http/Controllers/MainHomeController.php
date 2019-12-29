<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainHomeController extends Controller
{
     public function main()
    {
        return view('frontView.home.mainHome');
    }
}
