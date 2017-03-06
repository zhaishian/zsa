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
//前台首页
// Route::get('/', function () {
//     return view('welcome');
// });
// 前台登录
// Route::controller('/home/login','Home\LoginController');



// 前台 未登录
Route::controller('/indexone','Home\HomeOneController');

Route::group([],function(){
	Route::controller('/indextwo','Home\HomeTwoController');
});






/****************************　前　后　台　分　割　线　****************************/





//后台登录路由
Route::controller('/admin/login','Admin\LoginController');

Route::group(['middleware'=>'admins'],function(){
	//后台主页
	Route::controller('/admin/index','Admin\AdminController');
	Route::resource('/admin/users','Admin\UsersController');
	Route::resource('/admin/user','Admin\UserController');
	Route::controller('/admin/users/edit/user','Admin\UsersEditController');
	Route::controller('/admin/user/edit/user','Admin\UserEditController');
	Route::resource('/admin/cate','Admin\GoodsCateController');
});


