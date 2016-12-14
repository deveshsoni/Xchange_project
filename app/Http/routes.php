<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function() {

  Route::get('/', function () {
      return view('welcome');
  })->name('home');

  Route::post('/signup',[
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
  ]);

  Route::post('/signin',[
    'uses' => 'UserController@postSignIn',
    'as' => 'signinn'
  ]);

  Route::get('/logout',[
    'uses' => 'UserController@getLogout',
    'as' => 'logout'
  ]);

  Route::get('/dashboard',[
    'uses' => 'DashboardController@getDashboard',
    'as' => 'dashboard',
    'middleware' => 'auth'
  ]);

  Route::get('/addr', [
    'uses' => 'UserequireController@getUserpage' ,
    'as' => 'addr',
    'middleware' => 'auth'
  ]);

  Route::get('/addo', [
    'uses' => 'UserofferController@getUserpage',
    'as' => 'addo',
    'middleware' => 'auth'
  ]);

  Route::post('/userequirepost',[
    'uses' => 'UserequireController@postUserequirePost',
    'as' => 'addmrequire',
    'middleware' => 'auth'
  ]);

  Route::post('/useofferpost',[
    'uses' => 'UserofferController@postUserofferPost',
    'as' => 'addoffer',
    'middleware' => 'auth'
  ]);

  Route::get('/profile', [
    'uses' => 'ProfileController@getProfile',
    'as' => 'profile',
    'middleware' => 'auth'
  ]);

  Route::get('/matchr', function () {
      return view('matchr');
  });

  Route::get('/matcho', function () {
      return view('matcho');
  });


  Route::get('/matchor.{rtagname}', [
    'uses' => 'MatchofferController@getMatchofferr',
    'as' => 'matchor',
    'middleware' => 'auth']);

  Route::get('/matchro.{otagname}', [
    'uses' => 'MatchrequireController@getMatchrequiree',
    'as' => 'matchro',
    'middleware' => 'auth']);

  Route::get('/rposted', function () {
      return view('rposted');
  });

  Route::get('/oposted', function () {
      return view('oposted');
  });

});
