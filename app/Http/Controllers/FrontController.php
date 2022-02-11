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

class FrontController extends Controller
{

  
    public function index(){
    
      if(Auth::user()==null){
        $user = User::where('id',1)->first();
        $latest = item::latest()->first();
        $latest = $latest->pic;
        // $latest = item::orderBy('id', 'desc')->skip(1)->take(1)->get();
        // $latest = item::where('id','desc')->first();
        // $latest = item::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
      
        $theme = $user->theme;
        $logo = $user->logo;
        $font = $user->font;
        $img1 = $user->img1;
        $img2 = $user->img2;
        $img3 = $user->img3;
        $textcolor = $user->textcolor;
        $categories = category::all();
        $footimg = $user->footimg;
     
        return view('frontView.home.homeContent', compact('theme','logo','font','img1','img2','img3','textcolor','categories','footimg','latest'));

      }else{

        $user = User::where('id',Auth::id())->first();
        // $user = User::where('id',1)->first();
        $latest = item::latest()->first();
        $latest = $latest->pic;
        $theme = $user->theme;
        $logo = $user->logo;
        $font = $user->font;
        $img1 = $user->img1;
        $img2 = $user->img2;
        $img3 = $user->img3;
        $textcolor = $user->textcolor;
        $categories = category::all();
        $footimg = $user->footimg;
 //dd($latest);
        return view('frontView.home.homeContent', compact('theme','logo','font','img1','img2','img3','textcolor','categories','footimg','latest'));
      }
      // $user = User::where('id',Auth::id())->first();
      // $user = User::where('id',1)->first();
      // $theme = $user->theme;
      // $logo = $user->logo;
      // $font = $user->font;

      // return view('frontView.home.homeContent', compact('theme','logo','font'));

    }
    
    public function aboutIntro(){
        $aboutIntro = about::all();
        if(Auth::user()==null){
          $user = User::where('id',1)->first();
  
          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          return view('frontView.home.aboutIntro', compact('aboutIntro','theme','logo','font','textcolor','categories','footimg'));
  
        }else{
  
          $user = User::where('id',Auth::id())->first();
          // $user = User::where('id',1)->first();
          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          return view('frontView.home.aboutIntro', compact('aboutIntro','theme','logo','font','textcolor','categories','footimg'));
        }
    	// return view('frontView.home.aboutIntro',compact('aboutIntro'));
    }

    public function aboutGoal(){
        $aboutGoal = about::all();
        if(Auth::user()==null){
          $user = User::where('id',1)->first();
  
          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          return view('frontView.home.aboutGoal', compact('aboutGoal','theme','logo','font','textcolor','categories','footimg'));
  
        }else{
  
          $user = User::where('id',Auth::id())->first();
          // $user = User::where('id',1)->first();
          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          return view('frontView.home.aboutGoal', compact('aboutGoal','theme','logo','font','textcolor','categories','footimg'));
        }
      // return view('frontView.home.aboutGoal',compact('aboutGoal'));
    }

    public function exhibitionIntro(){
        $exhibitionIntro = exhibition::all();
        if(Auth::user()==null){
          $user = User::where('id',1)->first();
  
          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          return view('frontView.home.exhibition', compact('exhibitionIntro','theme','logo','font','textcolor','categories','footimg'));
  
        }else{
  
          $user = User::where('id',Auth::id())->first();
          // $user = User::where('id',1)->first();
          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          return view('frontView.home.exhibition', compact('exhibitionIntro','theme','logo','font','textcolor','categories','footimg'));
        }
      // return view('frontView.home.exhibition',compact('exhibitionIntro'));
    }

    


    public function contact(){
        $contact = contacts::all();
       
        if(Auth::user()==null){
          $user = User::where('id',1)->first();
  
          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          $mapimage = $user->mapimage;
          return view('frontView.home.contact', compact('contact','theme','logo','font','textcolor','categories','footimg','mapimage'));
  
        }else{
  
          $user = User::where('id',Auth::id())->first();
          // $user = User::where('id',1)->first();
          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          $mapimage = $user->mapimage;

          return view('frontView.home.contact', compact('contact','theme','logo','font','textcolor','categories','footimg','mapimage'));
        }
        
    	// return view('frontView.home.contact',compact('contact'));
    }
    public function staff(){

        $staff = staffs::all();
        if(Auth::user()==null){
          $user = User::where('id',1)->first();
  
          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          return view('frontView.home.staff', compact('staff','theme','logo','font','textcolor','categories','footimg'));
  
        }else{
  
          $user = User::where('id',Auth::id())->first();
          // $user = User::where('id',1)->first();
          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          return view('frontView.home.staff', compact('staff','theme','logo','font','textcolor','categories','footimg'));
        }
      // return view('frontView.home.staff',compact('staff'));
    }
    public function item(){

      $items = DB::table('items')
                  ->join('categories','categories.id','=','categoryId')
                  ->select('items.*','categories.categoryName as catName')
                  ->paginate(100);
                 // ->where('categories')

                 if(Auth::user()==null){
                  $user = User::where('id',1)->first();
          
                  $theme = $user->theme;
                  $logo = $user->logo;
                  $font = $user->font;
                  $textcolor = $user->textcolor;
                  $categories = category::all();
                  $footimg = $user->footimg;
                  return view('frontView.home.item', compact('items','theme','logo','font','textcolor','categories','footimg'));
          
                }else{
          
                  $user = User::where('id',Auth::id())->first();
                  // $user = User::where('id',1)->first();
                  $theme = $user->theme;
                  $logo = $user->logo;
                  $font = $user->font;
                  $textcolor = $user->textcolor;
                  $categories = category::all();
                  $footimg = $user->footimg;
                  return view('frontView.home.item', compact('items','theme','logo','font','textcolor','categories','footimg'));
                }
      // return view('frontView.home.item',['items'=>$items]); 
    }

    public function singleItem($id){

      $item = DB::table('items')
                  ->join('categories','categories.id','=','categoryId')
                  ->select('items.*','categories.categoryName as catName')
                  ->where('items.id',$id)
                  ->first();
                 // ->where('categories')
      
                 if(Auth::user()==null){
                  $user = User::where('id',1)->first();
          
                  $theme = $user->theme;
                  $logo = $user->logo;
                  $font = $user->font;
                  $textcolor = $user->textcolor;
                  $categories = category::all();
                  $footimg = $user->footimg;
                  return view('frontView.home.singleItem', compact('item','theme','logo','font','textcolor','categories','footimg'));
          
                }else{
          
                  $user = User::where('id',Auth::id())->first();
                  // $user = User::where('id',1)->first();
                  $theme = $user->theme;
                  $logo = $user->logo;
                  $font = $user->font;
                  $textcolor = $user->textcolor;
                  $categories = category::all();
                  $footimg = $user->footimg;
                  return view('frontView.home.singleItem', compact('item','theme','logo','font','textcolor','categories','footimg'));
                }

      // return view('frontView.home.singleItem',['item'=>$itemById]); 
  }

    
}
