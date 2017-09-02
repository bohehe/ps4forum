<?php 
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Home\HomeController;

class TradeController extends HomeController {

	public function getTradeList () {
		$data = [
			[
				'id' => 121,
				'title' => '「出售游戏」「上海」《生化危机7》包邮',
				'content' => '懒得上图 99新 特典未用 包邮 懒得上图 99新 特典未用 包邮 懒得上图 99新 特典未用 包邮',
				'uid' => 2341,
				'uName' => '卑鄙的异乡人',
				'uImgUrl' => env('APP_URL') . '/images/avator.png',
				'price' => 322.00,
				'Date' => '33分钟前',
				'imgs' => [
					env('APP_URL') . '/images/b1.jpg',
					env('APP_URL') . '/images/b2.jpg',
					env('APP_URL') . '/images/b3.jpg'
				]
			],
			[
				'id' => 121,
				'title' => '「出售游戏」「上海」《生化危机7》包邮',
				'content' => '懒得上图 99新 特典未用 包邮 懒得上图 99新 特典未用 包邮 懒得上图 99新 特典未用 包邮 懒得上图 99新 特典未用 包邮 懒得上图 99新 特典未用 包邮 懒得上图 99新 特典未用 包邮',
				'uid' => 2341,
				'uName' => '卑鄙的异乡人',
				'uImgUrl' => env('APP_URL') . '/images/avator.png',
				'price' => 322.00,
				'Date' => '33分钟前',
				'imgs' => []
			],
			[
				'id' => 121,
				'title' => '「出售游戏」「上海」《生化危机7》包邮',
				'content' => '懒得上图 99新 特典未用 包邮 懒得上图 99新 特典未用 包邮 懒得上图 99新 特典未用 包邮 懒得上图 99新 特典未用 包邮 懒得上图 99新 特典未用 包邮 懒得上图 99新 特典未用 包邮',
				'uid' => 2341,
				'uName' => '卑鄙的异乡人',
				'uImgUrl' => env('APP_URL') . '/images/avator.png',
				'price' => 322.00,
				'Date' => '33分钟前',
				'imgs' => []
			]
		];
		return response()->json($data);
	}

}