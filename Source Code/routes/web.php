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

Route::get('/', function () {

    return view('makiny_front.index',[
        'offer'=>App\Offer::take(10)->latest()->get()
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource ('/offer','OfferController');
Route::resource ('/category','CategoryController');

Route::get ('/all-items/{id}','OfferController@show');
