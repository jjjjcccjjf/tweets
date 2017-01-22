<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs \it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'MessagesController@show');
Route::get('/messages', 'MessagesController@show');
Route::get('/tweets', 'TweetsController@show');
Route::post('/addMessage', [
    'uses' => 'MessagesController@addMessage',
    'as' => 'addMessage'
  ]);
// Route::get('/', 'TweetsController@showTweets');
