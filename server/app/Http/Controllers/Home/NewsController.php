<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class NewsController extends Controller {

	public function getPostslists () {
		$data = [
			[
				'id' => 1,
				'title' => '《真三国无双8》官网今日（8.10）公布大量新图，包括桃园三结义...',
				'intro' => '《真三国无双8》官网今日（8.10）公布大量新图，包括桃园三结义、董卓与貂蝉、吕布大战张飞、夏侯惇单挑关羽、蜀吴同盟等。',
				'uImgUrl' => env('APP_URL') . '/images/avator.png',
				'uName' => '卑鄙的异乡人',
				'countReply' => 12,
				'postsDate' => '4分钟前'
			],
			[
				'id' => 2,
				'title' => '《真三国无双8》官网今日（8.10）公布大量新图，包括桃园三结义...',
				'intro' => '《真三国无双8》官网今日（8.10）公布大量新图，包括桃园三结义、董卓与貂蝉、吕布大战张飞、夏侯惇单挑关羽、蜀吴同盟等。',
				'uImgUrl' => env('APP_URL') . '/images/avator.png',
				'uName' => '卑鄙的异乡人',
				'countReply' => 12,
				'postsDate' => '4分钟前'
			],
			[
				'id' => 3,
				'title' => '《真三国无双8》官网今日（8.10）公布大量新图，包括桃园三结义...',
				'intro' => '《真三国无双8》官网今日（8.10）公布大量新图，包括桃园三结义、董卓与貂蝉、吕布大战张飞、夏侯惇单挑关羽、蜀吴同盟等。',
				'uImgUrl' => env('APP_URL') . '/images/avator.png',
				'uName' => '卑鄙的异乡人',
				'countReply' => 12,
				'postsDate' => '4分钟前'
			],
		];
	}

}