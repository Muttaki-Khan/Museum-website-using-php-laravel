<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contacts;
use App\staffs;
use App\item;
use App\about;
use App\category;
use App\exhibition;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;
Auth::routes();
use Illuminate\Support\Facades\Route; 
use Session;

class MainHomeController extends Controller
{
     public function main()
    {

        $museum_id = session('museum_id', '1');
        $is_admin = true;
        if(Auth::user()==null) {
          $is_admin=false;
        } else if(User::where('id',Auth::id())->first()->role_id==2) {
          $is_admin=false;
        }
        if($is_admin==false) {
        $user = User::where('id',$museum_id)->first();
		    $theme = $user->theme;
        $logo = $user->logo;
        $font = $user->font;
        $img1 = $user->img1;
        $img2 = $user->img2;
        $img3 = $user->img3;
        $textcolor = $user->textcolor;
        $categories = category::all();
        $footimg = $user->footimg;
        $latest = DB::table('items')->orderBy('id', 'desc')->where('user_id',$museum_id)->skip(0)->take(1)->get();
        $latest2 = DB::table('items')->orderBy('id', 'desc')->where('user_id',$museum_id)->skip(1)->take(1)->get();
        $latest3 = DB::table('items')->orderBy('id', 'desc')->where('user_id',$museum_id)->skip(2)->take(1)->get();
        $contacts = DB::table('contacts')->where('user_id',$museum_id)->first();

       // return view('frontView.home.mainHome');
        return view('frontView.home.homeContent', compact('contacts','theme','logo','font','img1','img2','img3','textcolor','categories','footimg','latest','latest2','latest3'));
    
    }else{
      

      $user = User::where('id',Auth::id())->first();
      // $latest =  item::latest()->where('user_id',$museum_id)->first();
      $latest = DB::table('items')->orderBy('id', 'desc')->where('user_id',$museum_id)->skip(0)->take(1)->get();
      $latest2 = DB::table('items')->orderBy('id', 'desc')->where('user_id',$museum_id)->skip(1)->take(1)->get();
      $latest3 = DB::table('items')->orderBy('id', 'desc')->where('user_id',$museum_id)->skip(2)->take(1)->get();
      $contacts = DB::table('contacts')->where('user_id',Auth::id())->first();
      $theme = $user->theme;
      $logo = $user->logo;
      $font = $user->font;
      $img1 = $user->img1;
      $img2 = $user->img2;
      $img3 = $user->img3;
      $textcolor = $user->textcolor;
      $categories = category::all();
      $footimg = $user->footimg;
      return view('frontView.home.homeContent', compact('theme','contacts','logo','font','img1','img2','img3','textcolor','categories','footimg','latest','latest2','latest3'));
    }

}}
