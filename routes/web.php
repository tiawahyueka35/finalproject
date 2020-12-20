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
Route::get('/', function(){
    return view('welcome');
});

Route::get('/home', 'HomeController@home');
Route::get('/faktakerinci', 'HomeController@fakta1');
Route::get('/jalurpendakiankerinci', 'HomeController@jalurpendakian1');
Route::get('/faktasemeru', 'HomeController@fakta2');
Route::get('/jalurpendakiansemeru', 'HomeController@jalurpendakian2');
Route::get('/faktarinjani', 'HomeController@fakta3');
Route::get('/jalurpendakianrinjani', 'HomeController@jalurpendakian3');
Route::get('/faktabukit', 'HomeController@fakta4');
Route::get('/jalurpendakianbukit', 'HomeController@jalurpendakian4');
Route::get('/faktalatimojong', 'HomeController@fakta5');
Route::get('/jalurpendakianlati', 'HomeController@jalurpendakian5');
Route::get('/faktabinaya', 'HomeController@fakta6');
Route::get('/jalurpendakianbinaya', 'HomeController@jalurpendakian6');
Route::get('/faktapyramid', 'HomeController@fakta7');
Route::get('/jalurpendakianpyramid', 'HomeController@jalurpendakian7');

Route::get ('/about', 'AboutController@about');
Route::get ('/article/{page}', 'ArticleController@article');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
