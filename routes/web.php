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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user_information/{slug?}','UserInformationController@index')->name('user_information');
Route::get('/user_information/{slug?}','UserInformationController@index')->name('user_information');
Route::get('/user_information/{slug?}','UserInformationController@index')->name('user_information');



Route::post('/user_information/{slug?}','UserInformationController@storeInformation')->name('store_user_information');
Route::post('/user_image/{slug?}','UserInformationController@storeImages')->name('store_user_image');
Route::post('/user_review/{slug?}','UserInformationController@storeReview')->name('store_user_review');