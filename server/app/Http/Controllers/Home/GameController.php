<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Home\HomeController;

class GameController extends HomeController {

	public function getGameList () {
		$data = [
			[
				'id' => 123,
				'title' => '血源诅咒',
				'star' => 4.5,
				'gameImgUrl' => env('APP_URL') . '/images/game1.jpg',
				'intro' => '血源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。天空与宇宙是一个整体。你竟敢直视于我！肥胖者的臭气。是潜行攻击的时候了。血源诅咒。源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。天空与宇宙是一个整体。你竟敢直视于我！肥胖者的臭气。是潜行攻击的时候了。血源诅咒。',
				'serialName' => 'blood borne',
				'developer' => 'From Software Inc',
				'publicDate' => '2015-03-24',
				'type' => [
					'RPG',
					'动作冒险'
				]
			],
			[
				'id' => 11,
				'title' => '血源诅咒',
				'star' => 4.0,
				'gameImgUrl' => env('APP_URL') . '/images/game2.jpg',
				'intro' => '血源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。天空与宇宙是一个整体。你竟敢直视于我！肥胖者的臭气。是潜行攻击的时候了。血源诅咒。源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。天空与宇宙是一个整体。你竟敢直视于我！肥胖者的臭气。是潜行攻击的时候了。血源诅咒。',
				'serialName' => 'blood borne',
				'developer' => 'From Software Inc',
				'publicDate' => '2015-03-24',
				'type' => [
					'RPG',
					'动作冒险'
				]
			],
			[
				'id' => 23,
				'title' => '血源诅咒',
				'star' => 5.0,
				'gameImgUrl' => env('APP_URL') . '/images/game3.jpg',
				'intro' => '血源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。天空与宇宙是一个整体。你竟敢直视于我！肥胖者的臭气。是潜行攻击的时候了。血源诅咒。源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。天空与宇宙是一个整体。你竟敢直视于我！肥胖者的臭气。是潜行攻击的时候了。血源诅咒。',
				'serialName' => 'blood borne',
				'developer' => 'From Software Inc',
				'publicDate' => '2015-03-24',
				'type' => [
					'RPG',
					'动作冒险'
				]
			],
			[
				'id' => 67,
				'title' => '血源诅咒',
				'star' => 4.0,
				'gameImgUrl' => env('APP_URL') . '/images/game4.jpg',
				'intro' => '血源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。天空与宇宙是一个整体。你竟敢直视于我！肥胖者的臭气。是潜行攻击的时候了。血源诅咒。源诅咒。血源诅咒。血源诅咒。血源诅咒。血源诅咒。天空与宇宙是一个整体。你竟敢直视于我！肥胖者的臭气。是潜行攻击的时候了。血源诅咒。',
				'serialName' => 'blood borne',
				'developer' => 'From Software Inc',
				'publicDate' => '2015-03-24',
				'type' => [
					'RPG',
					'动作冒险'
				]
			]
		];
		return response()->json($data);
	}

	public function getGameInfo () {
		$data = [
			'name' => '血源诅咒',
			'serialName' => 'blood borne',
			'language' => '繁中 简中 日语',
			'type' => 'RPG && 动作冒险',
			'developer' => 'From Software Inc',
			'platform' => 'PS4 XBOX',
			'publicVersion' => '正式版',
			'price' => '308港币',
			'publicDate' => '2015-3-24'
		];
		return response()->json($data);
	}

	public function getGameData () {
		$data = [
			'gameImgsUrls' => [
				env('APP_URL') . '/images/b1.jpg',
				env('APP_URL') . '/images/b2.jpg',
				env('APP_URL') . '/images/b3.jpg',
				env('APP_URL') . '/images/b6.jpg',
			],
			'gameRemark' => '本次DLC十分良心，前半段虽然基本是以前就有的场景，但打完到了血池以后就全是新场景了。并且还增加了数十种武器与其它新要素，新增的BOSS除了失败作比较无聊以外，其它几个BOSS都让人打的相当过瘾。整体难度也比较高，不亚于深度5的圣杯迷宫。作为一个DLC来讲相当不错。',
			'gameScore' => [
				'fiveStar' => 93,
				'fourStar' => 6,
				'threeStar' => 1,
				'twoStar' => 0,
				'oneStar' => 0
			],
			'myComment' => [
				'content' => '测试测试测试！你好。不好。测试测试测试！你好。不好。测试测试测试！你好。不好。测试测试测试！你好。不好。测试测试测试！你好。不好。测试测试测试！你好。不好。测试测试测试！你好。不好。',
				'star' => 5
			]
		];
		return response()->json($data);
	}

}