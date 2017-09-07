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


	public function getUserReply () {
		$data = [
			[
				'uid' => 1234,
				'uName' => '风与可爱的你',
				'uImgUrl' => env('APP_URL') . '/images/biggerhacker.jpg',
				'Date' => '2017-02-02 14:13',
				'content' => '星辰大海。星辰大海。星辰大海。',
				'title' => '血源诅咒DLC怎么进入啊',
				'postsId' => 434,
				'postsType' => 'game'
			],
			[
				'uid' => 1222,
				'uName' => '风与可爱的你',
				'uImgUrl' => env('APP_URL') . '/images/biggerhacker.jpg',
				'Date' => '2017-02-02 14:13',
				'content' => '测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。测试评论。',
				'title' => '血源诅咒DLC怎么进入啊',
				'postsId' => 213,
				'postsType' => 'posts'
			]
		];
		return response()->json($data);
	}


	public function getUserCollection () {
		$data = [
			[
				'postId' => 1232,
				'postType' => 'posts',
				'title' => '一周目被宇宙之女打成象拔蚌，求大佬带带~~',
				'content' => '萌新第一次玩血源，跟着黑桐谷歌的教程一直打到宇宙之女，实在太难了打不过，求来个大佬带带',
				'countReply' => 14,
				'Date' => '13分钟前'
			],
			[
				'postId' => 6576,
				'postType' => 'game',
				'title' => '我要测试',
				'content' => '这是一个测试的posts',
				'countReply' => 52,
				'Date' => '10分钟前'
			]
		];
		return response()->json($data);
	}

	public function getUserPosts () {
		$data = [
			[
				'postId' => 434,
				'title' => '温暖我凡事别再放心上',
				'content' => '快把这杯酒满上，干了这杯',
				'countReply' => 43,
				'Date' => '2014-05-25'
			],
			[
				'postId' => 12,
				'title' => '温暖我凡事别再放心上',
				'content' => '快把这杯酒满上，干了这杯',
				'countReply' => 43,
				'Date' => '2014-05-25'
			]
		];
		return response()->json($data);
	}

	public function getUserFollow () {
		$data = [
			[
				'uid' => 13,
				'uName' => 'good hunter',
				'uImgUrl' => env('APP_URL') . '/images/avator.png',
				'intro' => '个人简介、个人简介、个人简介、个人简介、个人简介、'
			],
			[
				'uid' => 1231,
				'uName' => 'good hunter',
				'uImgUrl' => env('APP_URL') . '/images/avator.png',
				'intro' => '个人简介、个人简介、个人简介、个人简介、个人简介、'
			]
		];
		return response()->json($data);
	}

	public function getUserTrade () {
		$data = [
			[
				'postId' => 434,
				'title' => '求购《CODE VEIN 噬血代码》~~',
				'content' => '万代南梦宫娱乐今日（8月13日）宣布，戏剧性探索动作RPG游戏《CODE VEIN 噬血代码》将于2018年推出PS4／Xbox One／STEAM繁体中文版。',
				'countReply' => 43,
				'Date' => '2014-05-25'
			],
			[
				'postId' => 12,
				'title' => '求购《CODE VEIN 噬血代码》~~',
				'content' => '万代南梦宫娱乐今日（8月13日）宣布，戏剧性探索动作RPG游戏《CODE VEIN 噬血代码》将于2018年推出PS4／Xbox One／STEAM繁体中文版。',
				'countReply' => 43,
				'Date' => '2014-05-25'
			]
		];
		return response()->json($data);
	}

}