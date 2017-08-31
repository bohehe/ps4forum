<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class HomeController extends Controller{

	//文章详情页的左侧用户信息
	public function getUserLeftInfo () {
		$data = [
			'uid' => 1,
			'uImgUrl' => env('APP_URL') . '/images/avator.png',
			'uName' => 'Good Hunter'
		];

		return response()->json($data);
	}

	//评论列表
	public function getCommentList () {
		$data = [
			[
				'uid' => 1,
				'uImgUrl' => env('APP_URL') . '/images/comment/a.png',
				'uName' => '风往北吹',
				'commentContent' => '来玩血源诅咒啊',
				'Date' => '2016-12-21',
				'reply' => [
					[
						'uid' => 2,
						'replyTo' => [],
						'uImgUrl' => env('APP_URL') . '/images/comment/b.png',
						'uName' => '风往北吹',
						'commentContent' => '玩你个大头鬼',
						'Date' => '2016-12-21'
					],
					[
						'uid' => 33,
						'replyTo' => [
							'replyToUid' => 2,
							'replyToUname' => '风往北吹'
						],
						'uImgUrl' => env('APP_URL') . '/images/comment/c.png',
						'uName' => 'bhh',
						'commentContent' => '？？？',
						'Date' => '2016-12-21'
					],
					[
						'uid' => 2,
						'replyTo' => [
							'replyToUid' => 33,
							'replyToUname' => 'bhh'							
						],
						'uImgUrl' => env('APP_URL') . '/images/comment/b.png',
						'uName' => '风往北吹',
						'commentContent' => '可以',
						'Date' => '2016-12-21'
					]
				]
			],
			[
				'uid' => 1,
				'uImgUrl' => env('APP_URL') . '/images/comment/a.png',
				'uName' => '风往北吹',
				'commentContent' => '对数把轮椅毫不怜惜',
				'Date' => '2016-12-21',
				'reply' => []
			]
		];
		return response()->json($data);
	}

}