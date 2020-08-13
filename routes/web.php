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

Route::get('/firstlink', 'FirstController@index');

Route::get('/signup', 'SignupController@index');
Route::get('/signin', 'SignupController@signin');
Route::get('login/facebook', 'SignupController@redirectToProviderFacebook');
Route::get('login/facebook/callback', 'SignupController@handleProviderCallbackFacebook');
Route::get('login/google', 'SignupController@redirectToProviderGoogle');
Route::get('login/google/callback', 'SignupController@handleProviderCallbackGoogle');
//used for registering
Route::view('/register', 'register');
Route::post('/store', 'RegisterController@register');
Route::view('/login', 'login');
Route::post('/logs', 'RegisterController@login');

Route::get('/firebase', 'FirebaseController@index');