<?php 
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Home\HomeController;

class UserController extends HomeController {

	public function getUserBgImg () {
		$data = [ 'userBgImgUrl' => env('APP_URL') . '/images/b5.jpg' ];

		return response()->json($data);
	}

}