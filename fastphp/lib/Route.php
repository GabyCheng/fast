<?php

namespace fastphp\lib;

class Route
{
	public $controller;
	public $action;

	/*
	*路由分发
	*/

	public function __construct()
	{

		if (isset($_SERVER['PATH_INFO'])) {
			$path_info = ($_SERVER['PATH_INFO']); //获取url后面部分

			$url = explode('/',ltrim($path_info,'/'));//分割后面部分，找出控制器和方法

			$this->controller = !empty($url[0]) ? $url[0] :DEFAULT_ACTION;
			unset($url[0]);

			$this->action = !empty($url[1]) ? $url[1] :DEFAULT_ACTION;
		    unset($url[1]);

			} else {

				$this->controller =  DEFAULT_CONTROLLER;
				$this->action = DEFAULT_ACTION;

		}

	/*
	*赋值get参数
	*/  
        if (isset($url)) {

			$i = 2;
			$count = count($url) + 2;

			while ($i < $count) {

				if (isset($url[$i+1]) && !empty($url[$i+1])) {

					$_GET[$url[$i]] = $url[$i + 1];
				}
				$i = $i + 2;
			}
}
		    
			
		}
}