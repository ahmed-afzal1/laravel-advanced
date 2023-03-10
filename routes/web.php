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

use App\PostCardSendingService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pay','PayOrderController@store');
Route::get('/channels','ChannelController@index');
Route::get('/posts','PostController@index');
Route::get('/customers','CustomerController@index');

// Route::get('/postcards', function(){
//     $postcardService = new PostCardSendingService($country, $width, $height);
// });
