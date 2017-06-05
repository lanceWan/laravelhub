<?php
$router->group(['prefix' => 'user'], function ($router)
{
	// 个人主页
	$router->get('/home', 'UserController@home');
	// 用户中心
	$router->get('/center', 'UserController@center');
	// 个人设置
	$router->get('/setting', 'UserController@setting');
});