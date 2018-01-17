<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'HomeController@displayHome');


Route::get('/login', function() {
    return view('login');
});

Route::get('/dash', 'HomeController@displayHome');

Auth::routes();

Route::get('/home', 'HomeController@displayHome')->name('home');
Route::get('/add-character', function() {
  return view('create-character');
});
Route::get('/add-campaign', function() {
  return view('create-campaign');
});

Route::post('/add-character', 'HomeController@addCharacter');
Route::post('/add-post', 'HomeController@addPost');
Route::post('/delete-post', 'HomeController@deletePost');

Route::get('/logout', function() {
  Auth::logout();
  return redirect('/login');
});

Route::get('/campaigns/{id}', 'HomeController@campaignHome');

Route::get('/characters/{id}', 'HomeController@characterHome');
