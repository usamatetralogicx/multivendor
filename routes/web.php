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
    return view('vendor/signup');
});
Route::post('signup','AuthController@save');
Route::get('log','AuthController@index');
Route::post('login','AuthController@login');
Route::get('logout','AuthController@logout');
Route::get('products','ProductsController@index');
Route::post('post_product','ProductsController@product_save');
Route::get('dashboard','AdminController@index');
Route::get('add_membership','MembershipController@index');
Route::post('post_membership','MembershipController@package_save');
Route::get('all_membership','MembershipController@all');