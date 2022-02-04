<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use Illuminate\Support\Facades\Route; 
use Illuminate\Support\Facades\Auth;
use App\User;
use App\category;

class GalleryController extends Controller
{
    

    public function gallery(){
        $img = item::all();

        if(Auth::user()==null){
            $user = User::where('id',1)->first();
    
            $theme = $user->theme;
            $logo = $user->logo;
            $font = $user->font;
            $textcolor = $user->textcolor;
            $categories = category::all();

            return view('frontView.home.gallery', compact('img','theme','logo','font','textcolor','categories'));
    
          }else{
    
            $user = User::where('id',Auth::id())->first();
            // $user = User::where('id',1)->first();
            $theme = $user->theme;
            $logo = $user->logo;
            $font = $user->font;
            $textcolor = $user->textcolor;
            $categories = category::all();

            return view('frontView.home.gallery', compact('img','theme','logo','font','textcolor','categories'));
          }
        			 
    	// return view('frontView.home.gallery',['img'=>$img]);
    }


}
