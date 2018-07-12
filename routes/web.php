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

Route::get('login', function(){
  return redirect('/');
});

Route::post('/register', [
  'uses' => 'UserController@postRegister',
  'as' => 'register'
]);

Route::post('/login', [
  'uses' => 'UserController@postLogIn',
  'as' => 'login'
]);

Route::get('/home', [
  'uses' => 'UserController@getHome',
  'as' => 'home',
  'middleware' => 'auth'
]);

Route::post('/createpost',[
  'uses' => 'PostController@postCreatePost',
  'as' => 'post.create'
]);


//Route::group(['middleware'=>['web']], function(){
//});
