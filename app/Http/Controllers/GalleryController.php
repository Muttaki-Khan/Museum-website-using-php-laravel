<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use App\contacts;
use Illuminate\Support\Facades\Route; 
use Illuminate\Support\Facades\Auth;
use App\User;
use App\category;
use DB;
class GalleryController extends Controller
{
    

    public function gallery(){
        // $img = item::all();
        // $imges = DB::table('items')->orderBy('id')->Paginate(2);
        $museum_id = session('museum_id', '1');
        $contacts = contacts::where('id',1)->first();
        $is_admin = true;
        if(Auth::user()==null) {
          $is_admin=false;
        } else if(User::where('id',Auth::id())->first()->role_id==2) {
          $is_admin=false;
        }
        if($is_admin==false) {
          $user = User::where('id',$museum_id)->first();
            $latest = item::latest()->first();
            $latest = $latest->pic;
            $imges = DB::table('items')->where('user_id',$museum_id)->Paginate(6);
            if(DB::table('contacts')->where('user_id')->exists()){

              $contacts = DB::table('contacts')->where('user_id',$museum_id)->first();
            }else{
              $contacts = DB::table('contacts')->where('user_id',1)->first();
    
            }

            $theme = $user->theme;
            $logo = $user->logo;
            $font = $user->font;
            $textcolor = $user->textcolor;
            $categories = category::all();
            $footimg = $user->footimg;
            
            return view('frontView.home.gallery', compact('imges','contacts','theme','logo','font','textcolor','categories','footimg'));
    
          }else{
    
            $user = User::where('id',Auth::id())->first();
            // $user = User::where('id',1)->first();
            if(DB::table('contacts')->where('user_id')->exists()){

              $contacts = DB::table('contacts')->where('user_id',Auth::id())->first();
            }else{
              $contacts = DB::table('contacts')->where('user_id',1)->first();
    
            } 
            $imges = DB::table('items')->where('user_id',Auth::id())->Paginate(6);

            $theme = $user->theme;
            $logo = $user->logo;
            $font = $user->font;
            $textcolor = $user->textcolor;
            $categories = category::all();
            $footimg = $user->footimg;
            return view('frontView.home.gallery', compact('imges','contacts','theme','logo','font','textcolor','categories','footimg'));
          }
        			 
    }


}
