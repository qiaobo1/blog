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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('index','HomeController@index');

// Route::get('/home','home\HomeController@index');

// 前台
Route::get('/contact','home\conController@index');
Route::get('/home','home\HomeController@index');

//后台
//后台首页显示
Route::get('/admins','admin\AdminController@index');
//后台用户列表显示
Route::get('/user','admin\userController@index');
//后台评论管理显示
// Route::get('/comment','admin\CommentController@index');
// //后台添加评论显示
// Route::post('/create','admin\CommentController@create');
//后台评论
Route::resource('/comment','admin\CommentController');
