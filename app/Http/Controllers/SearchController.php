<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
//use App\item;
use App\staffs;
use Illuminate\Support\Facades\Route; 
use Illuminate\Support\Facades\Auth;
use App\User;
use App\contacts;
use App\item;
use App\about;
use App\category;
use App\exhibition;

class SearchController extends Controller
{
   public function searchitem(Request $request){
        $query = $request->get('search');
        $museum_id = session('museum_id', '1');


                  $is_admin = true;
                  if(Auth::user()==null) {
                    $is_admin=false;
 
                  } else if(User::where('id',Auth::id())->first()->role_id==2) {
                    $is_admin=false;
                  }
                  if($is_admin==false) {
                   $user = User::where('id',$museum_id)->first();
                   $contacts = DB::table('contacts')->where('user_id',$museum_id)->first();

                   
                  $items = DB::table('items')
                  ->where('items.user_id',$museum_id)
                  ->join('categories','categories.id','=','categoryId')
                  ->select('items.*','categories.categoryName as catName')   
                  ->where('categories.user_id',$museum_id)    
                  ->Where('itemName', 'like', '%'.$query.'%')
                  ->orWhere('categoryId', 'like', '%'.$query.'%')
                  ->orWhere('itemCode', 'like', '%'.$query.'%')
                  ->orWhere('pic', 'like', '%'.$query.'%')
                  ->orWhere('information', 'like', '%'.$query.'%')
                  ->get();

                    $textcolor = $user->textcolor;
                    $theme = $user->theme;
                    $logo = $user->logo;
                    $font = $user->font;
                    $categories = category::all();
                    $footimg = $user->footimg;

                    return view('frontView.home.item', compact('items','categories','footimg','textcolor','user','contacts','theme','logo','font'));
            
                  }else{
            
                    $user = User::where('id',Auth::id())->first();
                    $contacts = DB::table('contacts')->where('user_id',Auth::id())->first();

                    $items = DB::table('items')
                    ->where('items.user_id',Auth::id())         
                    ->join('categories','categories.id','=','categoryId')
                    ->select('items.*','categories.categoryName as catName') 
                    ->where('categories.user_id',Auth::id())          
                    ->Where('itemName', 'like', '%'.$query.'%')
                    ->orWhere('categoryId', 'like', '%'.$query.'%')
                    ->orWhere('itemCode', 'like', '%'.$query.'%')
                    ->orWhere('pic', 'like', '%'.$query.'%')
                    ->orWhere('information', 'like', '%'.$query.'%')
                    ->get();

                    $textcolor = $user->textcolor;
                    $theme = $user->theme;
                    $logo = $user->logo;
                    $font = $user->font;
                    $categories = category::all();
                    $footimg = $user->footimg;

                    return view('frontView.home.item', compact('items','categories','footimg','textcolor','user','contacts','theme','logo','font'));
                  }
        // return view('frontView.home.item',['items'=>$items]);
    }

    
  


  }