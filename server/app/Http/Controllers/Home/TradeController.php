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

	public function getTradeDetail () {
		$data = [
			'title' => '上海地区出售生化危机7',
			'price' => 322.12,
			'type' => '游戏',
			'sendWay' => '包邮',
			'version' => '港版',
			'wechat' => 'xxxx',
			'tradeType' => '出售',
			'locate' => '上海',
			'language' => '简体中文',
			'qq' => '545123154',
			'countZan' => 11,
			'hasZan' => '赞',
			'hasKept' => '收藏',
			'countReply' => 45,
			'content' => '买了数字版的终极版所以出售光盘版。盒子和光盘都无痕，说明书齐全，保存很好。,飙酷车神普通版，港版英文，特典已用，90不包邮。',
			'imgs' => [
				env('APP_URL') . '/images/b1.jpg',
				env('APP_URL') . '/images/b2.jpg',
				env('APP_URL') . '/images/b3.jpg'
			]
		];

		return response()->json($data);
	}

}