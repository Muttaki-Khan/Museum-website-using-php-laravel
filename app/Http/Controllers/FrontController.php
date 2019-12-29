<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contacts;
use App\staffs;
use App\item;
use App\about;
use App\exhibition;
use DB;

class FrontController extends Controller
{
    public function index(){
        return view('frontView.home.homeContent');
    }
    
    public function aboutIntro(){
        $aboutIntro = about::all();
    	return view('frontView.home.aboutIntro',compact('aboutIntro'));
    }

    public function aboutGoal(){
        $aboutGoal = about::all();
      return view('frontView.home.aboutGoal',compact('aboutGoal'));
    }

    public function exhibitionIntro(){
        $exhibitionIntro = exhibition::all();
      return view('frontView.home.exhibition',compact('exhibitionIntro'));
    }

    


    public function contact(){
        $contact = contacts::all();
    	return view('frontView.home.contact',compact('contact'));
    }
    public function staff(){

        $staff = staffs::all();
      return view('frontView.home.staff',compact('staff'));
    }
    public function item(){

    

      $items = DB::table('items')
                  ->join('categories','categories.id','=','categoryId')
                  ->select('items.*','categories.categoryName as catName')
                  ->paginate(100);
                 // ->where('categories')
      


      return view('frontView.home.item',['items'=>$items]); 
    }

    public function singleItem($id){

      $itemById = DB::table('items')
                  ->join('categories','categories.id','=','categoryId')
                  ->select('items.*','categories.categoryName as catName')
                  ->where('items.id',$id)
                  ->first();
                 // ->where('categories')
      


      return view('frontView.home.singleItem',['item'=>$itemById]); 
  }

    
}
