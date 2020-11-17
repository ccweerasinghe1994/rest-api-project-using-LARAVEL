<?php

use Illuminate\Support\Facades\Route;

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

//commenting the default route structure
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/home/set', array('as' => 'homegame', function () {
    $url = route('homegame');
    return $url;
}));

Route::resource('posts','PostData');
