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
    return [];
});

// 指定允许其他域名访问  
header('Access-Control-Allow-Origin:*');  
// 响应类型  
header('Access-Control-Allow-Methods:get');  
// 响应头设置  
header('Access-Control-Allow-Headers:x-requested-with,content-type');

Route::group(['prefix' => 'api'], function () {
	Route::get('/indexBannerList', 'Home\IndexController@getBannerList');
	Route::get('/indexPostsList', 'Home\IndexController@getPostsList');
	Route::get('/indexHotGameList', 'Home\IndexController@getHotGameList');
	Route::get('/indexHotNewsList', 'Home\IndexController@getHotNewsList');
	Route::get('/indexHotPostsList', 'Home\IndexController@getHotPostsList');
});


