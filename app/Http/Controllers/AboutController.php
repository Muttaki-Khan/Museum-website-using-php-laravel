<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about;
use DB;

class AboutController extends Controller
{
   
      
     public function index(){

     
      return view('admin.about.aboutEntry'); 
  }  


    public function save(Request $request){

        $about = new about();


        $about->introduction = $request->introduction;
        $about->goals = $request->goals;
       
  

        $about->save();

        return redirect('/about/entry')->with('message','Data insert successfully.');



    }
  public function manage(){

      $abouts = about::all();
      return view('admin.about.aboutManage',['about'=>$abouts]);
  }

  public function edit($id){

      $aboutEdit = about::where('id',$id)->first();
      return view('admin.about.aboutEdit',['about'=>$aboutEdit]);
  }

  public function update(Request $request){

      

      $about= about::find($request->about_id);
      $about->introduction= $request->introduction;
     
      $about->goals= $request->goals;
    

      $about->save();

      return redirect('/about/manage')->with('message','Updated successfully.');

  }

  public function delete($id){

      $aboutDelete = about::find($id);
      $aboutDelete->delete();
      

      return redirect('/about/manage')->with('message','Deleted successfully.');
  }



}
    
   
    

