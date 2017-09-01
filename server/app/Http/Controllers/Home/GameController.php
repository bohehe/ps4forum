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

}