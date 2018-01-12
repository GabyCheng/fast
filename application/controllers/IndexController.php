<?php

namespace application\controllers;
use fastphp\lib\Controller;
use fastphp\lib\Model;
//use fastphp\lib\Log; 引入日志类
class IndexController extends Controller
{
	// public function __construct()
	// {
	// 	// $model = new Model();
	// 	// $sql = "select * from goods";
	// 	// $ret = $model->query($sql);
	// 	// print_r($ret->fetchAll());
	// 	$this->dispaly('index/');
	// }

	public function index()
	{
		//Log::log();

		$name = '小天秤';
		$title = '博客内容';
		$this->assign('name',$name);
		$this->assign('title',$title);
		$this->dispaly('index/index.html');




		
	}
}