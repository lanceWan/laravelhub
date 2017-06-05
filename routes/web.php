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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace' => 'Front'], function ($router)
{
	$router->get('/', 'IndexController@index');
	// 首页路由
	$router->resource('index', 'IndexController');
	// 问题路由
	$router->resource('question', 'QuestionController');
	// 个人中心
	require(base_path('routes/front/user.php'));
});
