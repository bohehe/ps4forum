<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Home\HomeController;

class NewsController extends HomeController {

	public function getPostslists () {
		$data = [
			[
				'id' => 1,
				'title' => '《真三国无双8》官网今日（8.10）公布大量新图，包括桃园三结义...',
				'intro' => '《真三国无双8》官网今日（8.10）公布大量新图，包括桃园三结义、董卓与貂蝉、吕布大战张飞、夏侯惇单挑关羽、蜀吴同盟等。',
				'uImgUrl' => env('APP_URL') . '/images/avator.png',
				'uName' => '卑鄙的异乡人',
				'countReply' => 12,
				'postsDate' => '4分钟前',
				'newsImgs' => [
					env('APP_URL') . '/images/b2.jpg',
					env('APP_URL') . '/images/b3.jpg',
					env('APP_URL') . '/images/b6.jpg'
				]
			],
			[
				'id' => 2,
				'title' => '《真三国无双8》官网今日（8.10）公布大量新图，包括桃园三结义...',
				'intro' => '《真三国无双8》官网今日（8.10）公布大量新图，包括桃园三结义、董卓与貂蝉、吕布大战张飞、夏侯惇单挑关羽、蜀吴同盟等。',
				'uImgUrl' => env('APP_URL') . '/images/avator.png',
				'uName' => '卑鄙的异乡人',
				'countReply' => 12,
				'postsDate' => '4分钟前',
				'newsImgs' => [
					env('APP_URL') . '/images/b2.jpg',
					env('APP_URL') . '/images/b3.jpg',
					env('APP_URL') . '/images/b6.jpg'
				]
			],
			[
				'id' => 3,
				'title' => '《真三国无双8》官网今日（8.10）公布大量新图，包括桃园三结义...',
				'intro' => '《真三国无双8》官网今日（8.10）公布大量新图，包括桃园三结义、董卓与貂蝉、吕布大战张飞、夏侯惇单挑关羽、蜀吴同盟等。',
				'uImgUrl' => env('APP_URL') . '/images/avator.png',
				'uName' => '卑鄙的异乡人',
				'countReply' => 12,
				'postsDate' => '4分钟前',
				'newsImgs' => [
					env('APP_URL') . '/images/b2.jpg',
					env('APP_URL') . '/images/b3.jpg',
					env('APP_URL') . '/images/b6.jpg'
				]
			],
		];

		return response()->json($data);

	}


}