<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\User;
use App\http\controllers\FromController;
use App\http\controllers\Admindashbord;
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

Route::get('/', function () {
    return view('welcome');
});
//Route::view('login','login');
//Route::view('profile','profile');
//Route::get('logout',function(){
    //if (session()->has('user'))
   // {
//session()->pull('user','null');
  //  }
   // return redirect('login');
//});
//Route::post("user",[User::class,'userlogin']);
 //Route::view('signup','signup');  
 Route::get('signup',[FromController::class,'signup']);  
 Route::post('sumbit',[FromController::class,'store']);//form sumbit creating routes
 Route::get('data_table_list',[FromController::class,'show']);
 Route::get('/edit/{sId}',[FromController::class,'edit']); // edit code use  here route create
 Route::post('/update',[FromController::class,'update']);     // for use this route to update data 
 Route::get('/delete/{sId}',[FromController::class,'destroy']); //for use this route delete data 
 //Route::view('/log', 'login'); //creating route for login
 Route::get('/login',[FromController::class,'viewlogin']);  //creating route for login
 Route::post('/submitlogin',[FromController::class,'userLogin']);  //creating route for login
 Route::get('dashboard',[Admindashbord::class,'dashboard']);
 Route::get('logout',[FromController::class,'logout']); 
     
   
 