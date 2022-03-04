<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\exhibition;
use DB;

class ExhibitionController extends Controller
{
    public function index()
    {
        return view('admin.exhibition.exEntry');
    }
public function save(Request $request){

        $exhibition = new exhibition();


        $exhibition->introduction = $request->introduction;
        $exhibition->user_id = Auth::id();


        $exhibition->save();

        return redirect('/exhi/entry')->with('message','Data insert successfully.');



    }
  public function manage(){

      $exhibitions = DB::table('exhibitions')->where('user_id', Auth::id())->get();

      return view('admin.exhibition.exManage',['exhibition'=>$exhibitions]);
  }

  public function edit($id){

      $exhibitionEdit = exhibition::where('id',$id)->first();
      return view('admin.exhibition.exEdit',['exhibition'=>$exhibitionEdit]);
  }

  public function update(Request $request){

      

      $exhibition= exhibition::find($request->exhibition_id);
      $exhibition->introduction= $request->introduction;
     
     
    

      $exhibition->save();

      return redirect('/exhi/manage')->with('message','Updated successfully.');

  }

  public function delete($id){

      $exhibitionDelete = exhibition::find($id);
      $exhibitionDelete->delete();
      

      return redirect('/exhi/manage')->with('message','Deleted successfully.');
  }



}
    
   
    


