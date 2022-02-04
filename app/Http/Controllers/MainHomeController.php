<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\category;
use Illuminate\Support\Facades\Auth;

class MainHomeController extends Controller
{
     public function main()
    {

        $user = User::where('id',1)->first();
		$theme = $user->theme;
        $logo = $user->logo;
        $font = $user->font;
        $img1 = $user->img1;
        $img2 = $user->img2;
        $img3 = $user->img3;
        $textcolor = $user->textcolor;
        $categories = category::all();
        $footimg = $user->footimg;

       // return view('frontView.home.mainHome');
        return view('frontView.home.homeContent', compact('theme','logo','font','img1','img2','img3','textcolor','categories','footimg'));
    
    }
}
