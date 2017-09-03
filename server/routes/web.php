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

Route::group(['prefix' => 'api'], function () {
	Route::get('/userLeftInfo', 'Home\HomeController@getUserLeftInfo');
	Route::get('/commentList', 'Home\HomeController@getCommentList');

	Route::get('/indexBannerList', 'Home\IndexController@getBannerList');
	Route::get('/indexPostsList', 'Home\IndexController@getPostsList');
	Route::get('/indexHotGameList', 'Home\IndexController@getHotGameList');
	Route::get('/indexHotNewsList', 'Home\IndexController@getHotNewsList');
	Route::get('/indexHotPostsList', 'Home\IndexController@getHotPostsList');

	Route::get('/newsList', 'Home\NewsController@getNewsLists');
	Route::get('/newsContent', 'Home\NewsController@getNewsContent');	

	Route::get('/postsDetail', 'Home\PostsController@getPostsDetail');

	Route::get('/gameList', 'Home\GameController@getGameList');
	Route::get('/gameInfo', 'Home\GameController@getGameInfo');
	Route::get('/gameData', 'Home\GameController@getGameData');

	Route::get('/tradeList', 'Home\TradeController@getTradeList');
	Route::get('/tradeDetail', 'Home\TradeController@getTradeDetail');

	Route::get('/userBgImg', 'Home\UserController@getUserBgImg');

});


