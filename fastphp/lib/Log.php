<?php
/*
* 日志类
*/

namespace fastphp\lib;

class Log
{
	/*
	*这里可以扩展存储位置
	*/

	// public function __construct()
	// {

	// }

	/*
	* 写入日志内容
	*/
	static public function log($message='',$file_name='log') {

		$path = RUNTIME.'/'.'log/';
		$dir = $path.date('Ymd');

		
		if (!is_dir($dir)) {
		
			mkdir($dir,0777,true);//创建文件，并给出权限
		}
        
		return file_put_contents($dir.'/'.$file_name.'.php', date('Y-m-d H:i:s').json_encode([$message]).PHP_EOL,FILE_APPEND);//换行和追加！！！




	}

}