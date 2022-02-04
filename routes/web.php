<?php
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/



Auth::routes();


//============= Search =============//
 Route::get('/search', 'SearchController@searchitem')->name('search');



//=============  User =============//
Route::group(['middleware' => ['web', 'auth']], function(){
    Route::get('/home', function(){
        if(Auth::user()->role_id ==1 ){
			$user = User::where('id',Auth::id())->first();
			$theme = $user->theme;
			$logo = $user->logo;
			$font = $user->font;
			$img1 = $user->img1;
			$img2 = $user->img2;
       	 	$img3 = $user->img3;
       
            return view('admin.home.homeContent')->with('theme', $theme, 'logo',$logo ,'font',$font,'img1',$img1,'img2',$img2,'img3',$img3);
        
        } else{
			$user = User::where('id',1)->first();
			$theme = $user->theme;
			$logo = $user->logo;
			$font = $user->font;
			$img1 = $user->img1;
			$img2 = $user->img2;
        	$img3 = $user->img3;
        	$textcolor = $user->$textcolor;
            return view('frontView.home.homeContent', compact('theme','logo','font','img1','img2','img3','textcolor'));
        }
    });
});


//Route::get('/home', 'HomeController@index');


Route::get('/','FrontController@index');

Route::get('/mainhome','MainHomeController@main');



Route::get('/staff', 'FrontController@staff');

Route::get('/item', 'FrontController@item');
Route::get('/{id}','FrontController@singleItem');



Route::get('/item', 'FrontController@item');
Route::get('/introduction', 'FrontController@aboutIntro');

Route::get('/goals', 'FrontController@aboutGoal');


//============= Home.Contact =============
Route::get('/contact', 'FrontController@contact');

//============= Home.Gallery =============
Route::get('/gallery', 'GalleryController@gallery');
//============= Home.Exhibition =============
Route::get('/exhibition', 'FrontController@exhibitionIntro');





//============= Admin.Contact =============//
Route::get('/info2','ContactController@index');

Route::post('/newInfo2','ContactController@store');

Route::get('/contact/edit/{id}',[
	'uses' => 'ContactController@edit',
	'as'   => 'contact.edit'
]);

Route::post('/contact/update/{id}',[
	'uses' => 'ContactController@update',
	'as'   => 'contact.update'
]);

Route::get('/contact/delete/{id}',[
	'uses' => 'ContactController@destroy',
	'as'   => 'contact.delete'
]);





//============= Admin.Message =============
Route::post('/newMsg','MessageController@store');

Route::get('/showMsg','MessageController@index');

Route::get('/readMsg','MessageController@trashed');

Route::get('/msg/delete/{id}',[
	'uses' => 'MessageController@destroy',
	'as'   => 'msg.delete'
]);

Route::get('/msg/kill/{id}',[
	'uses' => 'MessageController@kill',
	'as'   => 'msg.kill'
]);




	//============= Admin.About =============
	Route::get('/about/entry', 'AboutController@index');
    Route::post('/about/entry', 'AboutController@save');
    Route::get('/about/manage','AboutController@manage');
	Route::get('/about/edit/{id}','AboutController@edit');
	Route::post('/about/edit','AboutController@update');
	Route::get('/about/delete/{id}','AboutController@delete');

	
	//themecontrol
	Route::get('/theme/manage','ThemeController@manage');
	Route::get('/theme/color/edit/{id}','ThemeController@color');
	Route::post('/theme/color/edit','ThemeController@savecolor');
	Route::get('/theme/logo/edit/{id}','ThemeController@logo');
	Route::post('/theme/logo/edit','ThemeController@savelogo');
	Route::get('/theme/font/edit/{id}','ThemeController@font');
	Route::post('/theme/font/edit','ThemeController@savefont');
	Route::get('/theme/image/edit/{id}','ThemeController@image');
	Route::post('/theme/image/edit','ThemeController@saveimage');
	Route::get('/theme/textcolor/edit/{id}','ThemeController@textcolor');
	Route::post('/theme/textcolor/edit','ThemeController@savetextcolor');
	Route::get('/theme/footimage/edit/{id}','ThemeController@footimage');
	Route::post('/theme/footimage/edit','ThemeController@savefootimage');




	//============= Admin.Exhibition =============
	Route::get('/exhi/entry', 'ExhibitionController@index');
    Route::post('/exhi/entry', 'ExhibitionController@save');
    Route::get('/exhi/manage','ExhibitionController@manage');
	Route::get('/exhi/edit/{id}','ExhibitionController@edit');
	Route::post('/exhi/edit','ExhibitionController@update');
	Route::get('/exhi/delete/{id}','ExhibitionController@delete');


	//============= Admin.Category =============
	Route::get('/category/save','CategoryController@index');
	Route::post('/category/save','CategoryController@save');
	Route::get('/category/manage','CategoryController@manage');
	Route::get('/category/edit/{id}','CategoryController@edit');
	Route::post('/category/edit','CategoryController@update');
	Route::get('/category/delete/{id}','CategoryController@delete');

	//============= Admin.Item =============
	Route::get('/item/entry','ItemController@index');
	Route::post('/item/entry','ItemController@save');
	Route::get('/item/manage','ItemController@manage');
	Route::get('/item/view/{id}','ItemController@singleItem');
	Route::get('/item/edit/{id}','ItemController@editItem');
	Route::post('/item/edit','ItemController@updateItem');
	Route::get('/item/delete/{id}','ItemController@deleteItem');


	//============= Admin.Staff =============
	Route::get('/staff/entry','StaffController@index');
	Route::post('/staff/entry','StaffController@save');
	Route::get('/staff/manage','StaffController@manage');
	Route::get('/staff/view/{id}','StaffController@singleStaff');
	Route::get('/staff/edit/{id}','StaffController@editStaff');
	Route::post('/staff/edit','StaffController@updateStaff');
	Route::get('/staff/delete/{id}','StaffController@deleteStaff');


