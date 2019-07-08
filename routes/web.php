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
    return view('welcome');
});

Auth::routes();


Route::group([ 'middleware' => 'auth'], function()
{

		Route::get('/home', 'HomeController@index')->name('home');


		Route::resource('maincategories', 'MainCategoryController');
		Route::post('check_record','MainCategoryController@checkRecord');
		Route::post('deletemaincategories','MainCategoryController@destroy');
		Route::post('updatemaincategories','MainCategoryController@update');

		Route::resource('subcategories', 'SubCategoryController');
		Route::post('check_sub_cat_record','SubCategoryController@checkRecord');


		Route::post('deletesubcategories','SubCategoryController@destroy');
		Route::post('updatesubcategories','SubCategoryController@update');
});