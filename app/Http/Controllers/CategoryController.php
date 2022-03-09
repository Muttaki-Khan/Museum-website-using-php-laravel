<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use DB;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
  	public function index(){

  		return view('admin.category.categoryEntry');
  }

  	public function save(Request $request){

  		$category = new category();


  		$category->categoryName = $request->name;
  		$category->description = $request->description;
  		$category->categoryName = $request->name;
        $category->user_id = Auth::id();


  		$category->save();

  		return redirect('/category/save')->with('message','Data insert successfully.');



	}
  public function manage(){

      $categories = DB::table('categories')->where('user_id', Auth::id())->get();
      return view('admin.category.categoryManage',['category'=>$categories]);
  }

  public function edit($id){

      $categoryEdit = Category::where('id',$id)->first();
      return view('admin.category.categoryEdit',['category'=>$categoryEdit]);
  }

  public function update(Request $request){

      $categoryUp = Category::find($request->categoryId);
      $categoryUp->categoryName=$request->name;
      $categoryUp->description=$request->description;
    

      $categoryUp->save();

      return redirect('/category/manage')->with('message','Updated successfully.');

  }

  public function delete($id){

      $categoryDelete = Category::find($id);
      $categoryDelete->delete();
      

      return redirect('/category/manage')->with('message','Deleted successfully.');
  }



}