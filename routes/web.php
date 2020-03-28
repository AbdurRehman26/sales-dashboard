<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;
use App\Market;
use App\MarketTypes;



Route::get('/', function () {
    
    if (Auth::user()) {
        if (Auth::user()->user_type == '1') {
            return redirect()->intended('/admin/dashboard');
        } 

    } else {
            
        return redirect()->intended('/login');
    }
});

Auth::routes();


Route::get('/customer/signup', function(){
        return view('auth.register');
});


Route::group([
    'middleware' => [
        'user.customer',
    ],
], function(){



Route::get('/admin/dashboard', function(){
         $users = User::where('is_verified','!=','no')->count();
        return view('admin.dashboard',compact('users'));
});

Route::get('/admin/users',function(){
        $users = User::where('user_type','!=',1)->get();
        return view('admin.manage_users',compact('users'));
});


});


Route::post('/admin/import', 'Api\V1\FileImportController@import');
Route::post('/market/assign', 'MarketController@assign');

Route::get('/admin/import', 'Api\V1\FileImportController@index');


Route::get('/admin/market',function(){
        $categories = Market::all();
        foreach( $categories as $key =>$value){
             $type= MarketTypes::where('id', $value->market_type)->first();  
             if(!empty($type)){
                $value->market_type =$type->name; 
             }else{
                  $value->market_type ='N/A';
             }
             
             $user= User::where('id', $value->user_id)->first();  
             if(!empty($user)){
                $value->user_name =$user->name; 
             }else{
                  $value->user_name ='N/A';
             }
             
             
        }
        
        return view('admin.manage_categories',compact('categories'));
});
Route::get('/admin/user_status/{user_id}/{status}','MarketController@editUserStatus');
Route::get('/admin/viewpdf/{user_id}','MarketController@showPdf');
Route::get('/admin/viewaudio/{user_id}','MarketController@showAudio');
Route::get('/admin/img/{user_id}','MarketController@showimg');
Route::get('/admin/fcm','MarketController@fcmView');
Route::post('/admin/fcm','MarketController@fcm');
Route::get('/admin/delete-user/{id}','HomeController@UserDelete');
Route::get('/admin/delete-market/{id}','HomeController@MarketDelete');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
	 $exitCode = Artisan::call('config:cache');
    echo "cleared";
});


Route::get('/{any}', function (){
    return view('layouts.master');
})->where('any', '.*');


/*
    $markets = Market::where('user_id', request()->user()->id)->get();
    $markets = Market::all();

*/
