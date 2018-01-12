<?php
namespace fastphp\lib;

class Controller
{

	public $assign;

	public function assign($name,$value)
	{
		if ($name && $value) {

			$this->assign[$name] = $value;

		}

	}

	public function dispaly($path)
	{
		if ($path) {

			if (strpos($path, '/')) {
				$view = explode('/',$path);
				$view_one = empty($view[0]) ? 'Index' : $view[0];
				$view_two = (!isset($view[1]) or empty($view[1])) ? 'index' : $view[1];
				$view_path = APP_VIEW.'/'.$view_one.'/'.$view_two;
				if (file_exists($view_path)) {
					extract($this->assign);
					require $view_path;
			}
			}

		}
	}




}