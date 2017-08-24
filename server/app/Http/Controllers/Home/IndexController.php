<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class IndexController extends Controller {

	public function getBannerList () {
		$data = [
			[
				'id' => 1,
				'title' => 'test1',
				'imgUrl' => '../../assets/images/b4.jpg',
				'href' => ''
			],
			[
				'id' => 2,
				'title' => 'test2',
				'imgUrl' => '../../assets/images/b5.jpg',
				'href' => ''
			],
			[
				'id' => 3,
				'title' => 'test2',
				'imgUrl' => '../../assets/images/b6.jpg',
				'href' => ''
			]
		];

		return response()->json($data);

	}

	public function getPostsList () {
		$data = [
			[
				'id' => 1,
				'title' => '《仁王》DLC“义的后继者”详细内容全新截图公布',
				'intro' => '近日，《仁王》官网公布了游戏新DLC“义的后继者”详细内容和游戏的全新截图。',
				'imgs' => [
					'../assets/images/r1.jpg',
					'../assets/images/r1.jpg',
					'../assets/images/r1.jpg'
				]
			],
			[
				'id' => 2,
				'title' => '《仁王》DLC“义的后继者”详细内容全新截图公布',
				'intro' => '近日，《仁王》官网公布了游戏新DLC“义的后继者”详细内容和游戏的全新截图。',
				'imgs' => [
					'../assets/images/r1.jpg',
					'../assets/images/r1.jpg',
					'../assets/images/r1.jpg'
				]
			]
		];

		return response()->json($data);

	}

	public function getHotGameList () {
		$data = [
			[
				'id' => 1,
				'title' => 'BloodBorne2'
			],
			[
				'id' => 2,
				'title' => '巫师4'
			],
			[
				'id' => 3,
				'title' => '生化危机8'
			],
			[
				'id' => 4,
				'title' => '尼尔：机械纪元'
			],
			[
				'id' => 5,
				'title' => '仁王'
			],
			[
				'id' => 6,
				'title' => '神秘海域'
			]
		];

		return response()->json($data);

	}

	public function getHotNewsList () {
		$data = [
			[
				'id' => 1,
				'title' => 'BloodBorne2'
			],
			[
				'id' => 2,
				'title' => '巫师4'
			],
			[
				'id' => 3,
				'title' => '生化危机8'
			],
			[
				'id' => 4,
				'title' => '尼尔：机械纪元'
			],
			[
				'id' => 5,
				'title' => '仁王'
			],
			[
				'id' => 6,
				'title' => '神秘海域'
			]
		];

		return response()->json($data);

	}

	public function getHotPostsList () {
		$data = [
			[
				'id' => 1,
				'title' => 'BloodBorne2'
			],
			[
				'id' => 2,
				'title' => '巫师4'
			],
			[
				'id' => 3,
				'title' => '生化危机8'
			],
			[
				'id' => 4,
				'title' => '尼尔：机械纪元'
			],
			[
				'id' => 5,
				'title' => '仁王'
			],
			[
				'id' => 6,
				'title' => '神秘海域'
			]
		];

		return response()->json($data);

	}


}