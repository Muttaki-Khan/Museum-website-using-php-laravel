<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThemeController extends Controller
{
    public function manage(){

        $user = Auth::id();

        return view('admin.theme.themeManage',compact('user'));
    }

    public function color(){

        $user = Auth::id();

        return view('admin.theme.colorEdit',compact('user'));
    } 
    public function savecolor(Request $request)
    {
        $user = Auth::id();
        $logo = DB::table('users')->where('id', $user)->update(['theme' => $request->color]);
        return redirect('/theme/color/edit/'.$user)->with('message','color changed successfully');


    }

    public function textcolor(){

        $user = Auth::id();

        return view('admin.theme.textColorEdit',compact('user'));
    } 
    public function savetextcolor(Request $request)
    {
        $user = Auth::id();
        $textcolor = DB::table('users')->where('id', $user)->update(['textcolor' => $request->textcolor]);
        return redirect('/theme/textcolor/edit/'.$user)->with('message','Text color changed successfully');


    }


    public function logo(){

        $user = Auth::id();

        return view('admin.theme.logoEdit',compact('user'));

    }

    public function savelogo(Request $request)
    {
 

        $user = Auth::id();
        $logo = DB::table('users')->where('id', $user)->update(['logo' => $request->logo]);

        $pictureInfo = $request->file('logo');

        $logoName = $user.$pictureInfo->getClientOriginalName();

        $folder = "logoImage/";
  
        $pictureInfo->move($folder,$logoName);

        $picUrl= $folder.$logoName;

        $logoPic = User::find($user);

        $logoPic->logo=$picUrl;
        $logoPic->save();


        return redirect('/theme/logo/edit/'.$user)->with('message','logo insert successfully');

    }

    public function footimage(){

        $user = Auth::id();

        return view('admin.theme.footimageEdit',compact('user'));

    }

    public function savefootimage(Request $request)
    {
 

        $user = Auth::id();
        $footimg = DB::table('users')->where('id', $user)->update(['footimg' => $request->footimg]);

        $pictureInfo = $request->file('footimg');

        $footImgName = $user.$pictureInfo->getClientOriginalName();

        $folder = "footerBannerImage/";
  
        $pictureInfo->move($folder,$footImgName);

        $picUrl= $folder.$footImgName;

        $footImgPic = User::find($user);

        $footImgPic->footimg=$picUrl;
        $footImgPic->save();


        return redirect('/theme/footimage/edit/'.$user)->with('message','Footer banner insert successfully');

    }

    public function mapimage(){

        $user = Auth::id();

        return view('admin.theme.mapimageEdit',compact('user'));

    }

    public function savemapimage(Request $request)
    {
 

        $user = Auth::id();
        $mapimage = DB::table('users')->where('id', $user)->update(['mapimage' => $request->mapimage]);

        $pictureInfo = $request->file('mapimage');

        $mapImgName = $user.$pictureInfo->getClientOriginalName();

        $folder = "mapImage/";
  
        $pictureInfo->move($folder,$mapImgName);

        $picUrl= $folder.$mapImgName;

        $mapImgPic = User::find($user);

        $mapImgPic->mapimage=$picUrl;
        $mapImgPic->save();


        return redirect('/theme/mapimage/edit/'.$user)->with('message','Map insert successfully');

    }

    public function font(){

        $user = Auth::id();
        return view('admin.theme.fontEdit',compact('user'));
    }
    public function savefont(Request $request)
    {
        
        $user = Auth::id();
        $font = DB::table('users')->where('id', $user)->update(['font' => $request->font]);
        return redirect('/theme/font/edit/'.$user)->with('message','font changed successfully');

    }

    public function colablink(){

        $user = Auth::id();
        return view('admin.theme.colabLinkEdit',compact('user'));
    }
    public function savecolablink(Request $request)
    {
        
        $user = Auth::id();
        $colablink = DB::table('users')->where('id', $user)->update(['colablink' => $request->colablink]);
        return redirect('/theme/colablink/edit/'.$user)->with('message','colab link changed successfully');

    }

    public function image(){

        $user = Auth::id();

        return view('admin.theme.imageEdit',compact('user'));

    }

    public function saveimage(Request $request)
    {
 
        $user = Auth::id();
        $img1 = DB::table('users')->where('id', $user)->update(['img1' => $request->img1]);
        $img2 = DB::table('users')->where('id', $user)->update(['img2' => $request->img2]);
        $img3 = DB::table('users')->where('id', $user)->update(['img3' => $request->img3]);

        $pictureInfo1 = $request->file('img1');
        $pictureInfo2 = $request->file('img2');
        $pictureInfo3 = $request->file('img3');

        $imgName1 = $user.$pictureInfo1->getClientOriginalName();
        $imgName2 = $user.$pictureInfo2->getClientOriginalName();
        $imgName3 = $user.$pictureInfo3->getClientOriginalName();


        $folder = "slideImage/";
  
        $pictureInfo1->move($folder,$imgName1);
        $pictureInfo2->move($folder,$imgName2);
        $pictureInfo3->move($folder,$imgName3);


        $picUrl1= $folder.$imgName1;
        $picUrl2= $folder.$imgName2;
        $picUrl3= $folder.$imgName3;


        $imgPic1 = User::find($user);
        $imgPic2 = User::find($user);
        $imgPic3 = User::find($user);


        $imgPic1->img1=$picUrl1;
        $imgPic2->img2=$picUrl2;
        $imgPic3->img3=$picUrl3;

        $imgPic1->save();
        $imgPic2->save();
        $imgPic3->save();

        return redirect('/theme/image/edit/'.$user)->with('message','image insert successfully');

    }
}
