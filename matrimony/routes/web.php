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

Route::get('/', 'RootController@index');

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home');


Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');


Route::get('/view_bothprofile', 'view_bothprofileController@index');


Route::get('/user/{id}/details','view_userprofileController@index');


Route::get('/user/update','UpdateController@index');

Route::post('/user/update_profile','UpdateController@update');

Route::get('/edit_bothprofile','edit_bothprofileController@index');



Route::post('/edit_profile','edit_bothprofileController@store');

Route::post('/search','SearchController@store');

Route::get('/message','MessageController@index');

//Route::get('/get_pic','');


