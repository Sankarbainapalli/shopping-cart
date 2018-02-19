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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/shoppingcart','ProductsController');
Route::get('/signup','ProductsController@create');
Route::get('/home1','ProductsController@home');
Route::get('/about','ProductsController@about');
Route::get('/contact','ProductsController@contact');
Route::post('/contact','ProductsController@postContact');
Route::get('/addbooks','ProductsController@post');
Route::post('/p','ProductsController@store');
Route::get('/checkout','ProductsController@checkout');
Route::post('/checkout','ProductsController@postCheckout');

Route::get('/addcart/{id}','ProductsController@getAdd');
Route::get('/dashboard','ProductsController@getDashboard');



// Route::get('/signin','ProductsController@getSignin');
//  Route::post('/postSignin','ProductsController@postSign');

// Route::group(['prifix' => 'user'], function()
// {
// Route::group(['middleware' => 'guest'], function(){

// Route::get('/signup','UsersController@getSignup');
// Route::post('/signup','UsersController@postSignup'); 

// Route::get('/signin','UsersController@getSignin'); 
// Route::post('/signin','UsersController@postSignin');


// // });

// Route::get('/profile','UsersController@getProfile'); 

// Route::get('/logout','UsersController@getLogout');

// });


