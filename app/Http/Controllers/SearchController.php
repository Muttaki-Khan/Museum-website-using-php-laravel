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
        $contacts = contacts::where('id',1)->first();
        

         $items = DB::table('items')         
                  ->join('categories','categories.id','=','categoryId')
                  ->select('items.*','categories.categoryName as catName')       
                  ->Where('itemName', 'like', '%'.$query.'%')
                  ->orWhere('categoryId', 'like', '%'.$query.'%')
                  ->orWhere('itemCode', 'like', '%'.$query.'%')
                  ->orWhere('pic', 'like', '%'.$query.'%')
                  ->orWhere('information', 'like', '%'.$query.'%')
                  ->get();

                  if(Auth::user()==null){
                    $user = User::where('id',1)->first();
                    $textcolor = $user->textcolor;
                    $theme = $user->theme;
                    $logo = $user->logo;
                    $font = $user->font;
                    $categories = category::all();
                    $footimg = $user->footimg;

                    return view('frontView.home.item', compact('items','categories','footimg','textcolor','user','contacts','theme','logo','font'));
            
                  }else{
            
                    $user = User::where('id',Auth::id())->first();
                    // $user = User::where('id',1)->first();
                    $textcolor = $user->textcolor;
                    $theme = $user->theme;
                    $logo = $user->logo;
                    $font = $user->font;
                    $categories = category::all();
                    $footimg = $user->footimg;

                    return view('frontView.home.item', compact('items','textcolor','categories','footimg','user','theme','logo','font'));
                  }
        // return view('frontView.home.item',['items'=>$items]);
    }

    
  


  }