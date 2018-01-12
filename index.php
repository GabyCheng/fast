<?php


define('APP_CORE','/fastphp');
define('APP','application');
define('APP_VIEW',APP.'/views');
define('RUNTIME','./runtime');

define('APP_DEBUG',true); //开启debug
if (APP_DEBUG) {
	ini_set('display_error','On');
} else{
	ini_set('display_error','Off');
}
require 'vendor/autoload.php';//引入composer自动加载
require '/config/config.php';
require APP_CORE.'/common/function.php';//加载函数库

\fastphp\Core::run(); //自动加载

