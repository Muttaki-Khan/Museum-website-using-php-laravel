<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use Illuminate\Support\Facades\Route; 
use Illuminate\Support\Facades\Auth;
use App\User;
use App\category;
use DB;
class GalleryController extends Controller
{
    

    public function gallery(){
        // $img = item::all();
        $imges = DB::table('items')->orderBy('id')->Paginate(2);


        if(Auth::user()==null){
            $user = User::where('id',1)->first();
            $latest = item::latest()->first();
            $latest = $latest->pic;

            $theme = $user->theme;
            $logo = $user->logo;
            $font = $user->font;
            $textcolor = $user->textcolor;
            $categories = category::all();
            $footimg = $user->footimg;
            
            return view('frontView.home.gallery', compact('imges','theme','logo','font','textcolor','categories','footimg',));
    
          }else{
    
            $user = User::where('id',Auth::id())->first();
            // $user = User::where('id',1)->first();
            
            $theme = $user->theme;
            $logo = $user->logo;
            $font = $user->font;
            $textcolor = $user->textcolor;
            $categories = category::all();
            $footimg = $user->footimg;
            return view('frontView.home.gallery', compact('img','theme','logo','font','textcolor','categories','footimg'));
          }
        			 
    	// return view('frontView.home.gallery',['img'=>$img]);
    }


}
