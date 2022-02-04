<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
//use App\item;
use App\staffs;
use Illuminate\Support\Facades\Route; 
use Illuminate\Support\Facades\Auth;
use App\User;

class SearchController extends Controller
{
   public function searchitem(Request $request){
        $query = $request->get('search');
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
            
                    $theme = $user->theme;
                    $logo = $user->logo;
                    $font = $user->font;
                    return view('frontView.home.item', compact('items','theme','logo','font'));
            
                  }else{
            
                    $user = User::where('id',Auth::id())->first();
                    // $user = User::where('id',1)->first();
                    $theme = $user->theme;
                    $logo = $user->logo;
                    $font = $user->font;
              
                    return view('frontView.home.item', compact('items','theme','logo','font'));
                  }
        // return view('frontView.home.item',['items'=>$items]);
    }

    
  


  }