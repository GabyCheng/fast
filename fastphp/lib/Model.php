<?php

namespace fastphp\lib;

class Model extends \PDO
{
/*
* 待优化（单例模式）减少消耗内存
*/
	public function __construct()
	{


		$dbms = defined('DBMS') ? DBMS : 'mysql';     //数据库类型
		$host = defined('DB_HOST') ? DB_HOST : '127.0.0.1'; //数据库主机名
		$db_name = defined('DB_NAME') ? DB_NAME : 'test';    //使用的数据库
		$user = defined('DB_USER') ? DB_USER : 'root';      //数据库连接用户名
		$pass = defined('DB_PASSWORD') ? DB_PASSWORD : 'root' ;          //对应的密码
		$dsn = "$dbms:host=$host;dbname=$db_name";
		try {
			parent::__construct($dsn,$user,$pass);

		} catch (\PDOException $e) {

    		die ("Error!: " . $e->getMessage() . "<br/>");
		}



	}


}