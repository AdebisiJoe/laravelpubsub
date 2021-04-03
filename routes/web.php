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

use Illuminate\Http\Request;

Route::get('/', function ()
 {
    // return view('welcome');

    $app = Redis::connection();

    print_r($app);
});

Route::post('/publish/{topic}',function(Request $request,$topic){
      $message=$request->message;
     Redis::publish($topic,json_encode(['url'=>$message]));
});



