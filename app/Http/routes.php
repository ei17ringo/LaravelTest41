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

//クロージャーを使用して、Route->View
// Route::get('/', function () {
//     return view('welcome');
// });

// Route->Controller->View（一般的な経路）
Route::get("/","WelcomeController@index");

// http://localhost:8000/contanct にアクセスしたら、WelcomeControllerのcontactメソッドを実行する
Route::get('contact', 'WelcomeController@contact');   // 追加
// http://localhost:8000/about にアクセスしたら、PagesControllerのaboutメソッドを実行する
Route::get('about','PagesController@about');

