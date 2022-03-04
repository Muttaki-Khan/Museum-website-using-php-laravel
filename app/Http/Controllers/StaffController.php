<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\staffs;
use Illuminate\Support\Facades\Auth;

use DB;

class StaffController extends Controller
{
    public function index(){

     
      return view('admin.staff.staffEntry'); 
  }

  public function save(Request $request){

        $staff = new staffs();


  		$staff->staffName = $request->name;
  		
  		$staff->staffRank = $request->rank;
  		$staff->pic = 'Picture';
  		$staff->Email = $request->email;
      $staff->user_id = Auth::id();

  		$staff->save();

      $lastId = $staff->id;

      $pictureInfo = $request->file('pic');

      $picName = $lastId.$pictureInfo->getClientOriginalName();

      $folder = "staffImage/";

      $pictureInfo->move($folder,$picName);

      $picUrl= $folder.$picName;

      $staffPic = staffs::find($lastId);

      $staffPic->pic=$picUrl;
      $staffPic->save();

      return redirect('/staff/entry')->with('message','staff insert successfully');

  }

  public function manage(){

    $staffs = DB::table('staffs')->where('user_id', Auth::id())->get();

      return view('admin.staff.staffManage',['staff'=>$staffs]);
      
  }


  public function singlestaff($id){

      $staffById = DB::table('staffs')
                  ->join('categories','categories.id','=','categoryId')
                  ->select('staffs.*','categories.categoryName as catName')
                  ->where('staffs.id',$id)
                  ->first();
                 // ->where('categories')
      


      return view('admin.staff.singlestaff',['staff'=>$staffById]); 
  }

  public function editstaff($id){


     $staff= staffs::where('id',$id)->first();
     return view('admin.staff.staffEdit',['staff'=>$staff]);
  }
  public function updatestaff(Request $request){


    // $staff= staff::find($request->staff_id);
     $staffPic= staffs::where('id',$request->staff_id)->first();
  

     if ($picInfo=$request->file('pic')) {
        if (file_exists($staffPic->pic)) {
        unlink($staffPic->pic);
       }
     $picName=$request->staff_id.$picInfo->getClientOriginalName();
     $path="staffImage/";
     $picUrl= $path.$picName;
     $picInfo->move($path,$picName);
     }
     else {
       $picUrl= $staffPic->pic;
     }

     $staff= staffs::find($request->staff_id);
     $staff->staffName= $request->name;
     
     $staff->staffRank= $request->rank;
     $staff->pic= $picUrl;
     $staff->Email= $request->email;

     $staff->save();

     return redirect('/staff/manage')->with('message','Update successfully');



  }
  public function deletestaff($id){


    $staffPic= staffs::where('id',$id)->first();
     if (file_exists($staffPic->pic)) {
       unlink($staffPic->pic);
     }
     


     $staffDelete= staffs::find($id);
     $staffDelete->delete();
     
     return redirect('/staff/manage')->with('message','Deleted successfully');
  }


}
