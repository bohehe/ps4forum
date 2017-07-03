<?php
namespace Forum\Controller;
use Common\Controller\HomebaseController;

/**
 * 首页
 */
class IndexController extends HomebaseController {
	
    // 首页
	public function index() {
    	$this->display("index");
    }

}


