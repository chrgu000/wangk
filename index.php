<?php

//路径设置
define('ROOT',__DIR__.'/');
define('CORE',ROOT.'core');
define('APP',ROOT.'app');
define('WEB_NAME','app');
define('TPL',APP.'/home/view/');
define('VENDOR',ROOT.'vendor/');

//时间设置
date_default_timezone_set("PRC");

//composer设置
require_once './vendor/autoload.php';

//debug
define('DEBUG', true);
if(DEBUG){
	$errorTitle = "框架出错了!";
	$whoops = new \Whoops\Run;
	$handle = new \Whoops\Handler\PrettyPageHandler();
	$handle->setPageTitle($errorTitle);
	$whoops->pushHandler($handle);
	$whoops->register();
	ini_set('display_errors','On');
}else{
	ini_set('display_errors','Off');
}

//hello();
//dump($_SERVER);
//包含常用函数
include(CORE.'/common/function.php');

//框架
include(CORE.'/wangk.php');

//设置模板引擎
define('TEMPLATE',2); //1PHP 2smarty 3twig

//自动加载
spl_autoload_register('\core\wangk::load');

//命名路径
\core\wangk::run();

