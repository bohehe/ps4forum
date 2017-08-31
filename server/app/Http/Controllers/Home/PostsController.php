<?php 
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Home\HomeController;

class PostsController extends HomeController {

	public function getPostsDetail() {
		$data = [
			'title' => '血源诅咒2将于2018年4月份发售',
			'hasKept' => '收藏',
			'hasZan' => '赞',
			'dataList' => [
				[
					'uid' =>1,
					'uName' => 'Good Hunter',
					'uImgUrl' => env('APP_URL') . '/images/avator.png',
					'content' => '
						<div class="posts-content">
	                        血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售
	                    </div>
	                  	<div class="posts-content-img">
	                      	<img src="' . env('APP_URL') . '/images/b1.jpg' . '">
	                  	</div>
	                  	<div class="posts-content-img">
	                      	<img src="' . env('APP_URL') . '/images/b2.jpg' . '">
	                  	</div>
	                  	<div class="posts-content-img">
	                      	<img src="' . env('APP_URL') . '/images/b3.jpg' . '">
	                  	</div>',
	            	'Date' => '2017-08-05 22:22',
	            	'reply'=>[]
				],
				[
					'uid' =>2,
					'uName' => 'Bigger Hacker',
					'uImgUrl' => env('APP_URL') . '/images/biggerhacker.jpg',
					'content' => '
						<div class="posts-content">
	                        血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售血源诅咒2将于2018年4月份发售
	                    </div>
	                  	<div class="posts-content-img">
	                      	<img src="' . env('APP_URL') . '/images/mannrika.jpg' . '">
	                  	</div>',
	            	'Date' => '2017-08-05 22:22',
	            	'reply'=>[
	            		[
	            			'uid' => 123,
	            			'uImgUrl' => env('APP_URL') . '/images/avator.png',
	            			'uName' => 'Good Hunter',
	            			'replyContent' => '对数把轮椅毫不怜惜。对数把轮椅毫不怜惜。对数把轮椅毫不怜惜。',
	            			'Date' => '2012-12-03 22:33',
	            			'replyTo' => []
	            		],
	            		[
	            			'uid' => 12,
	            			'uImgUrl' => env('APP_URL') . '/images/biggerhacker.jpg',
	            			'uName' => 'Good Hunter',
	            			'replyContent' => '对数把轮椅毫不怜惜。对数把轮椅毫不怜惜。对数把轮椅毫不怜惜。',
	            			'Date' => '2012-12-03 22:33',
	            			'replyTo' => [
	            				'uid' => 1222,
	            				'uName' => 'BiggerHacker'
	            			]
	            		],
	            		[
	            			'uid' => 13,
	            			'uImgUrl' => env('APP_URL') . '/images/biggerhacker.jpg',
	            			'uName' => 'BiggerHacker',
	            			'replyContent' => '对数把轮椅毫不怜惜。对数把轮椅毫不怜惜。对数把轮椅毫不怜惜。',
	            			'Date' => '2012-12-03 22:33',
	            			'replyTo' => [
	            				'uid' => 1111,
	            				'uName' => 'Good Hunter'
	            			]
	            		],
	            		[
	            			'uid' => 123,
	            			'uImgUrl' => env('APP_URL') . '/images/avator.png',
	            			'uName' => 'Good Hunter',
	            			'replyContent' => '对数把轮椅毫不怜惜。对数把轮椅毫不怜惜。对数把轮椅毫不怜惜。',
	            			'Date' => '2012-12-03 22:33',
	            			'replyTo' => []
	            		]
	            	]
				],
			]
		];
		return response()->json($data);
	}

}
