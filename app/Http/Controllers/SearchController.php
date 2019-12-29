<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
//use App\item;
use App\staffs;

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
        return view('frontView.home.item',['items'=>$items]);
    }

    
  


  }