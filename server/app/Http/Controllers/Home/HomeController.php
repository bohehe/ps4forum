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

	//文章评论列表
	public function getCommentList () {
		$data = [
			[
				'uid' => 1,
				'uImgUrl' => env('APP_URL') . '/images/comment/a.png',
				'uName' => '风往北吹',
				'commentContent' => '你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！',
				'Date' => '2016-12-21',
				'replay' => [
					[
						'uid' => 2,
						'uImgUrl' => env('APP_URL') . '/images/comment/b.png',
						'uName' => '风往北吹',
						'commentContent' => '你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！',
						'Date' => '2016-12-21'
					],
					[
						'uid' => 3,
						'uImgUrl' => env('APP_URL') . '/images/comment/c.png',
						'uName' => '风往北吹',
						'commentContent' => '@xx：你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！',
						'Date' => '2016-12-21'
					]
				]
			],
			[
				'uid' => 1,
				'uImgUrl' => env('APP_URL') . '/images/comment/a.png',
				'uName' => '风往北吹',
				'commentContent' => '你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！',
				'Date' => '2016-12-21',
				'replay' => [
					[
						'uid' => 2,
						'uImgUrl' => env('APP_URL') . '/images/comment/b.png',
						'uName' => '风往北吹',
						'commentContent' => '你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！',
						'Date' => '2016-12-21'
					],
					[
						'uid' => 3,
						'uImgUrl' => env('APP_URL') . '/images/comment/c.png',
						'uName' => '风往北吹',
						'commentContent' => '@xx：你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！',
						'Date' => '2016-12-21'
					],
					[
						'uid' => 2,
						'uImgUrl' => env('APP_URL') . '/images/comment/c.png',
						'uName' => 'xx',
						'commentContent' => '@风往北吹：你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！悉心照料人偶。你竟敢直视于我！',
						'Date' => '2016-12-21'
					]
				]
			]
		];
		return response()->json($data);
	}

}