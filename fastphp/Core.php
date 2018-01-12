<?php

namespace fastphp;
use fastphp\lib\Route;
use application\Controllers\IndexController;
class Core
{


	static public function run()
	{

		$route = new Route(); //自动加载控制器
		$controller_class = $route->controller; //获取控制器名称
        $class_file = $controller_class.'Controller';
        $action = $route->action;
        /*
        *判断类文件是否存在，存在则加载控制器和方法
        */
        $name = APP."\Controllers\\$class_file";
        $file_path = $name.'.php';
        if (file_exists($file_path)) {
		$controller = new $name;
		$action_array = get_class_methods($controller);
		if (in_array($action, $action_array)) {

			$controller->$action();
		}
		} else {

			die("找不到控制器！");
		
		}
	}

}
