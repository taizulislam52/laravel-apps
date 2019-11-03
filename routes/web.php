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



Auth::routes();
Route::get('/email',function (){
    return new \App\Mail\UserWelcomeMail();
});
Route::post('/follow/{user}','FollowController@store');

Route::get('/', 'PostController@index');
Route::get('/p/create','PostController@create')->name('post.create');
Route::post('/p','PostController@store')->name('post.store');
Route::get('/p/{post}','PostController@show')->name('post.show');

Route::get('/profile/{user}', 'ProfileController@index')->name('profile.index');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update');
