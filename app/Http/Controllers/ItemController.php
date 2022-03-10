<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\item;
use DB;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index(){

      $categories = DB::table('categories')->where('user_id', Auth::id())->get();
      return view('admin.item.itemEntry',['categories'=>$categories]); 
  }
  public function save(Request $request){

      $item = new item();


  		$item->itemName = $request->name;
  		$item->categoryId = $request->categoryId;
  		$item->itemCode = $request->code;
  		$item->pic = 'Picture';
      $item->user_id = Auth::id();
  		$item->information = $request->information;

  		$item->save();

      $lastId = $item->id;
    

      $pictureInfo = $request->file('pic');
      $picName = $lastId.$pictureInfo->getClientOriginalName();

      $folder = "itemImage/";

      $pictureInfo->move($folder,$picName);

      $picUrl= $folder.$picName;

      $itemPic = item::find($lastId);

      $itemPic->pic=$picUrl;
      $itemPic->save();

      return redirect('/item/entry')->with('message','Item insert successfully');


  }

  public function manage(){

      $items = DB::table('items')
                  ->join('categories','categories.id','=','categoryId')
                  ->select('items.*','categories.categoryName as catName')
                  ->where('items.user_id',Auth::id())
                  ->where('categories.user_id',Auth::id())
                  ->paginate(3);
                 // ->where('categories')
      


      return view('admin.item.itemManage',['items'=>$items]); 
  }


  public function singleItem($id){

      $itemById = DB::table('items')
                  ->join('categories','categories.id','=','categoryId')
                  ->select('items.*','categories.categoryName as catName')
                  ->where('items.id',$id)
                  ->first();
                 // ->where('categories')
      


      return view('admin.item.singleItem',['item'=>$itemById]); 
  }

  public function editItem($id){


     $item= item::where('id',$id)->first();
     $categories = category::all();
     return view('admin.item.itemEdit',['item'=>$item, 'categories'=>$categories]);
  }
  public function updateItem(Request $request){


    // $item= item::find($request->item_id);
     $itemPic= item::where('id',$request->item_id)->first();

     if ($picInfo=$request->file('pic')) {
        if (file_exists($itemPic->pic)) {
        unlink($itemPic->pic);
       }
     $picName=$request->item_id.$picInfo->getClientOriginalName();
     $path="itemImage/";
     $picUrl= $path.$picName;
     $picInfo->move($path,$picName);
     }
     else {
       $picUrl= $itemPic->pic;
     }

     $item= item::find($request->item_id);
     $item->itemName= $request->name;
     $item->categoryId= $request->categoryId;
     $item->itemCode= $request->code;
     $item->pic= $picUrl;
     $item->information= $request->information;

     $item->save();

     return redirect('/item/manage')->with('message','Update successfully');



  }
  public function deleteItem($id){


    $itemPic= item::where('id',$id)->first();
     if (file_exists($itemPic->pic)) {
       unlink($itemPic->pic);
     }
     


     $itemDelete= item::find($id);
     $itemDelete->delete();
     
     return redirect('/item/manage')->with('message','Deleted successfully');
  }


}
