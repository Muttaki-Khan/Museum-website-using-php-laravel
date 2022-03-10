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

class FrontController extends Controller
{
    public function index(){
      $museum_id = session('museum_id', '1');
      $is_admin = true;
      if(Auth::user()==null) {
        $is_admin=false;
      } else if(User::where('id',Auth::id())->first()->role_id==2) {
        $is_admin=false;
      }
      if($is_admin==false) {
        $user = User::where('id',$museum_id)->first();
        
        if(DB::table('contacts')->where('user_id')->exists()){

          $contacts = DB::table('contacts')->where('user_id',$museum_id)->first();
        }else{
          $contacts = DB::table('contacts')->where('user_id',1)->first();

        }

        $latest = DB::table('items')->orderBy('id', 'desc')->where('user_id',$museum_id)->skip(0)->take(1)->get();
        $latest2 = DB::table('items')->orderBy('id', 'desc')->where('user_id',$museum_id)->skip(1)->take(1)->get();
        $latest3 = DB::table('items')->orderBy('id', 'desc')->where('user_id',$museum_id)->skip(2)->take(1)->get();
      
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

      }else{

        $user = User::where('id',Auth::id())->first();
        // $latest =  item::latest()->where('user_id',$museum_id)->first();
        $latest = DB::table('items')->orderBy('id', 'desc')->where('user_id',$museum_id)->skip(0)->take(1)->get();
        $latest2 = DB::table('items')->orderBy('id', 'desc')->where('user_id',$museum_id)->skip(1)->take(1)->get();
        $latest3 = DB::table('items')->orderBy('id', 'desc')->where('user_id',$museum_id)->skip(2)->take(1)->get();
        if(DB::table('contacts')->where('user_id')->exists()){

          $contacts = DB::table('contacts')->where('user_id',Auth::id())->first();
        }else{
          $contacts = DB::table('contacts')->where('user_id',1)->first();

        } 
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

    }

    
    public function chooseMuseum(Request $request){

      Session::put('museum_id', $request->user_id);
      $contacts = contacts::where('id',1)->first();

      $items = DB::table('items')
                  ->join('categories','categories.id','=','categoryId')
                  ->select('items.*','categories.categoryName as catName')
                  ->paginate(10);
                  

      $users = DB::table('users')->where('role_id', '1')->get();
    
                 if(Auth::user()==null){
                  $user = User::where('id',session('museum_id'))->first();
                  $theme = $user->theme;
                  $logo = $user->logo;
                  $font = $user->font;
                  $textcolor = $user->textcolor;
                  $categories = category::all();
                  $footimg = $user->footimg;
                  return view('frontView.home.museums', compact('items','users','contacts','theme','logo','font','textcolor','categories','footimg'));
          
                }else{
          
                  $user = User::where('id',session('museum_id'))->first();
                  // $user = User::where('id',1)->first();
                  $theme = $user->theme;
                  $logo = $user->logo;
                  $font = $user->font;
                  $textcolor = $user->textcolor;
                  $categories = category::all();
                  $footimg = $user->footimg;
                  return view('frontView.home.museums', compact('items','users','contacts','theme','logo','font','textcolor','categories','footimg'));
                }
    }
    
    public function aboutIntro(){
      $museum_id = session('museum_id', '1');
      // $contacts = contacts::where('id',1)->first();

      $is_admin = true;
      if(Auth::user()==null) {
        $is_admin=false;
      } else if(User::where('id',Auth::id())->first()->role_id==2) {
        $is_admin=false;
      }
      if($is_admin==false) {
        $user = User::where('id',$museum_id)->first();
        $aboutIntro = DB::table('abouts')->where('user_id', $museum_id)->get();
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
          return view('frontView.home.aboutIntro', compact('aboutIntro','theme','logo','font','textcolor','categories','footimg','contacts'));
  
        }else{
  
          $user = User::where('id',Auth::id())->first();
          // $user = User::where('id',1)->first();
          $aboutIntro = DB::table('abouts')->where('user_id', Auth::id())->get();
          if(DB::table('contacts')->where('user_id')->exists()){

            $contacts = DB::table('contacts')->where('user_id',Auth::id())->first();
          }else{
            $contacts = DB::table('contacts')->where('user_id',1)->first();
  
          } 
          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          return view('frontView.home.aboutIntro', compact('aboutIntro','contacts','theme','logo','font','textcolor','categories','footimg'));
        }
    	// return view('frontView.home.aboutIntro',compact('aboutIntro'));
    }

    public function aboutGoal(){

        $aboutGoal = about::all();
        $museum_id = session('museum_id', '1');
        $is_admin = true;
        if(Auth::user()==null) {
          $is_admin=false;
        } else if(User::where('id',Auth::id())->first()->role_id==2) {
          $is_admin=false;
        }
        if($is_admin==false) {
          $user = User::where('id',$museum_id)->first();
          if(DB::table('contacts')->where('user_id')->exists()){

            $contacts = DB::table('contacts')->where('user_id',$museum_id)->first();
          }else{
            $contacts = DB::table('contacts')->where('user_id',1)->first();
  
          }
          $aboutGoal = DB::table('abouts')->where('user_id', $museum_id)->get();

          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          return view('frontView.home.aboutGoal', compact('aboutGoal','contacts','theme','logo','font','textcolor','categories','footimg'));
  
        }else{
  
          $user = User::where('id',Auth::id())->first();
          // $user = User::where('id',1)->first();
          $aboutGoal = DB::table('abouts')->where('user_id', Auth::id())->get();
          if(DB::table('contacts')->where('user_id')->exists()){

            $contacts = DB::table('contacts')->where('user_id',Auth::id())->first();
          }else{
            $contacts = DB::table('contacts')->where('user_id',1)->first();
  
          } 
          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          return view('frontView.home.aboutGoal', compact('aboutGoal','contacts','theme','logo','font','textcolor','categories','footimg'));
        }
      // return view('frontView.home.aboutGoal',compact('aboutGoal'));
    }

    public function exhibitionIntro(){

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
          if(DB::table('contacts')->where('user_id')->exists()){

            $contacts = DB::table('contacts')->where('user_id',$museum_id)->first();
          }else{
            $contacts = DB::table('contacts')->where('user_id',1)->first();
  
          }         
           $exhibitionIntro  = DB::table('exhibitions')->where('user_id', $museum_id)->get();
  
          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          return view('frontView.home.exhibition', compact('exhibitionIntro','contacts','theme','logo','font','textcolor','categories','footimg'));
  
        }else{
  
          $user = User::where('id',Auth::id())->first();
          // $user = User::where('id',1)->first();
          $exhibitionIntro  = DB::table('exhibitions')->where('user_id', Auth::id())->get();
          if(DB::table('contacts')->where('user_id')->exists()){

            $contacts = DB::table('contacts')->where('user_id',Auth::id())->first();
          }else{
            $contacts = DB::table('contacts')->where('user_id',1)->first();
  
          } 
          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          return view('frontView.home.exhibition', compact('exhibitionIntro','contacts','theme','logo','font','textcolor','categories','footimg'));
        }
      // return view('frontView.home.exhibition',compact('exhibitionIntro'));
    }

    


    public function contact(){

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
        
        $contact  = DB::table('contacts')->where('user_id', $museum_id)->get();

        $theme = $user->theme;
        $logo = $user->logo;
        $font = $user->font;
        $textcolor = $user->textcolor;
        $categories = category::all();
        $footimg = $user->footimg;
        $mapimage = $user->mapimage;
        return view('frontView.home.contact', compact('contact','contacts','theme','logo','font','textcolor','categories','footimg','mapimage'));

      }else{

        $user = User::where('id',Auth::id())->first();
        // $user = User::where('id',1)->first();
        $contact  = DB::table('contacts')->where('user_id', Auth::id())->get();


        $theme = $user->theme;
        $logo = $user->logo;
        $font = $user->font;
        $textcolor = $user->textcolor;
        $categories = category::all();
        $footimg = $user->footimg;
        $mapimage = $user->mapimage;

        return view('frontView.home.contact', compact('contact','contacts','theme','logo','font','textcolor','categories','footimg','mapimage'));
      }
      
    // return view('frontView.home.contact',compact('contact'));
  }
    public function staff(){

        $museum_id = session('museum_id', '1');
        $is_admin = true;
        if(Auth::user()==null) {
          $is_admin=false;
        } else if(User::where('id',Auth::id())->first()->role_id==2) {
          $is_admin=false;
        }
        if($is_admin==false) {
          $user = User::where('id',$museum_id)->first();
          if(DB::table('contacts')->where('user_id')->exists()){

            $contacts = DB::table('contacts')->where('user_id',$museum_id)->first();
          }else{
            $contacts = DB::table('contacts')->where('user_id',1)->first();
  
          }          
          $staff = DB::table('staffs')->where('user_id', $museum_id)->get();
  
          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          return view('frontView.home.staff', compact('staff','contacts','theme','logo','font','textcolor','categories','footimg'));
  
        }else{
  
          $user = User::where('id',Auth::id())->first();
          // $user = User::where('id',1)->first();
          $staff = DB::table('staffs')->where('user_id', Auth::id())->get();
          if(DB::table('contacts')->where('user_id')->exists()){

            $contacts = DB::table('contacts')->where('user_id',Auth::id())->first();
          }else{
            $contacts = DB::table('contacts')->where('user_id',1)->first();
  
          } 
          $theme = $user->theme;
          $logo = $user->logo;
          $font = $user->font;
          $textcolor = $user->textcolor;
          $categories = category::all();
          $footimg = $user->footimg;
          return view('frontView.home.staff', compact('staff','contacts','theme','logo','font','textcolor','categories','footimg'));
        }
      // return view('frontView.home.staff',compact('staff'));
    }
    public function item(){

     $museum_id = session('museum_id', '1');
     $is_admin = true;
                 if(Auth::user()==null) {
                   $is_admin=false;

                 } else if(User::where('id',Auth::id())->first()->role_id==2) {
                   $is_admin=false;
                 }
                 if($is_admin==false) {
                  $user = User::where('id',$museum_id)->first();
                  if(DB::table('contacts')->where('user_id')->exists()){

                    $contacts = DB::table('contacts')->where('user_id',$museum_id)->first();
                  }else{
                    $contacts = DB::table('contacts')->where('user_id',1)->first();
          
                  }
                  $items = DB::table('items')
                  ->join('categories','categories.id','=','categoryId')
                  ->select('items.*','categories.categoryName as catName')
                  ->where('items.user_id', $museum_id)
                  ->where('categories.user_id', $museum_id)
                  ->paginate(100);
          
                  $theme = $user->theme;
                  $logo = $user->logo;
                  $font = $user->font;
                  $textcolor = $user->textcolor;
                  $categories = category::all();
                  $footimg = $user->footimg;
                  return view('frontView.home.item', compact('items','contacts','theme','logo','font','textcolor','categories','footimg'));
          
                }else{
          
                  $user = User::where('id',Auth::id())->first();
                  // $user = User::where('id',1)->first();

                  $items = DB::table('items')
                  ->join('categories','categories.id','=','categoryId')
                  ->select('items.*','categories.categoryName as catName')
                  ->where('items.user_id', Auth::id())
                  ->where('categories.user_id', Auth::id())
                  ->paginate(100);
                  if(DB::table('contacts')->where('user_id')->exists()){

                    $contacts = DB::table('contacts')->where('user_id',Auth::id())->first();
                  }else{
                    $contacts = DB::table('contacts')->where('user_id',1)->first();
          
                  }                   
                  $theme = $user->theme;
                  $logo = $user->logo;
                  $font = $user->font;
                  $textcolor = $user->textcolor;
                  $categories = category::all();
                  $footimg = $user->footimg;
                  return view('frontView.home.item', compact('items','contacts','theme','logo','font','textcolor','categories','footimg'));
                }
      // return view('frontView.home.item',['items'=>$items]); 
    }

    public function museums(){

      $items = DB::table('items')
                  ->join('categories','categories.id','=','categoryId')
                  ->select('items.*','categories.categoryName as catName')
                  ->paginate(10);
                  

      $users = DB::table('users')->where('role_id', '1')->get();
    
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
                  return view('frontView.home.museums', compact('items','users','contacts','theme','logo','font','textcolor','categories','footimg'));
          
                }else{
          
                  $user = User::where('id',Auth::id())->first();
                  // $user = User::where('id',1)->first();
                  if(DB::table('contacts')->where('user_id')->exists()){

                    $contacts = DB::table('contacts')->where('user_id',Auth::id())->first();
                  }else{
                    $contacts = DB::table('contacts')->where('user_id',1)->first();
          
                  } 
                  $theme = $user->theme;
                  $logo = $user->logo;
                  $font = $user->font;
                  $textcolor = $user->textcolor;
                  $categories = category::all();
                  $footimg = $user->footimg;
                  return view('frontView.home.museums', compact('items','users','contacts','theme','logo','font','textcolor','categories','footimg'));
                }

    }


    public function singleItem($id){

      $item = DB::table('items')
                  ->join('categories','categories.id','=','categoryId')
                  ->select('items.*','categories.categoryName as catName')
                  ->where('items.id',$id)
                  ->first();
                 // ->where('categories')
      
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
                  return view('frontView.home.singleItem', compact('item','contacts','theme','logo','font','textcolor','categories','footimg'));
          
                }else{
          
                  $user = User::where('id',Auth::id())->first();
                  // $user = User::where('id',1)->first();
                  if(DB::table('contacts')->where('user_id')->exists()){

                    $contacts = DB::table('contacts')->where('user_id',Auth::id())->first();
                  }else{
                    $contacts = DB::table('contacts')->where('user_id',1)->first();
          
                  } 
                  $theme = $user->theme;
                  $logo = $user->logo;
                  $font = $user->font;
                  $textcolor = $user->textcolor;
                  $categories = category::all();
                  $footimg = $user->footimg;
                  return view('frontView.home.singleItem', compact('item','contacts','theme','logo','font','textcolor','categories','footimg'));
                }

      // return view('frontView.home.singleItem',['item'=>$itemById]); 
  }

    
}
