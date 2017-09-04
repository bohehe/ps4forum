<?php 
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Home\HomeController;

class UserController extends HomeController {

	public function getUserBgImg () {
		$data = [ 'userBgImgUrl' => env('APP_URL') . '/images/b5.jpg' ];

		return response()->json($data);
	}

	public function getUserMsgList () {
		$data = [
			[
				'uid' => 1,
				'uName' => '何遇',
				'countNewMsg' => 3
			],
			[
				'uid' => 2,
				'uName' => '燕十八',
				'countNewMsg' => 4			],
			[
				'uid' => 3,
				'uName' => '天璇真人',
				'countNewMsg' => 2
			]
		];
		return response()->json($data);
	}

	public function getUserMsg () {
		$data = [
			'uid' => 1,
			'uName' => 'good hunter',
			'uImgUrl' => env('APP_URL') . '/images/avator.png',
			'msg' => [
				'toUser' => [
					'uid' => 2,
					'uName' => 'Bigger Hacker',
					'uImgUrl' => env('APP_URL') . '/images/biggerhacker.jpg'
				],
				'msgs' => [
					[
						'content' => '你好啊',
						'Date' => '2017-12-21 12:12',
						'isMine' => 1,
						'isNews' => 2
					],
					[
						'content' => '我不好',
						'Date' => '2017-12-22 12:12',
						'isMine' => 2,
						'isNews' => 1
					],
					[
						'content' => '醒醒我们回家了',
						'Date' => '2017-12-23 12:12',
						'isMine' => 1,
						'isNews' => 1
					],
					[
						'content' => '稳',
						'Date' => '2017-12-24 12:12',
						'isMine' => 2,
						'isNews' => 1
					]
				]
			]
		];
		return response()->json($data);
	}

}