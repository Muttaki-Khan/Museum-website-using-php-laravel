<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;

class GalleryController extends Controller
{
    

    public function gallery(){
        $img = item::all();
        
        			 
    	return view('frontView.home.gallery',['img'=>$img]);
    }


}
