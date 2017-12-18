<?php
namespace core;
use core\lib\log;
use core\lib\route;
class wangk{

	public static $classMap = array();
	public static $_route=array();
	public function __construct(){
		//echo 11111;
	}

	public static function run(){
		Log::init();//启动日志类
		$route = new Route();//加载路由类	
		$module = $route->module;
		$ctrl = $route->ctrl;
		$action = $route->action;
		self::$_route['module'] = $module;//static中记录_module
		self::$_route['ctrl'] = $ctrl;//static中记录_module
		self::$_route['action'] = $action;//static中记录_module
		$ctrlFile = APP.'/'.$module.'/ctrl/'.$ctrl.'Ctrl.php';
		$ctrlClass = '\\'.WEB_NAME.'\\'.$module.'\ctrl\\'.$ctrl.'Ctrl';
		if(is_file($ctrlFile)){
			require_once $ctrlFile;
			$ctrlObj = new $ctrlClass();
			$ctrlObj->$action();
			Log::log('requesting:'.$module.'-'.$ctrl.'-'.$action);//日志记录
			//p($ctrlObj);
		}
	}

	/**
	*@class:加载函数自动传递的参数,我们需要合理的利用他的路径
	*
	*/
	public static function load($class){
//p($class);
		//find: core/route.php
		if(isset(self::$classMap[$class])){
			return true;
		}else{	
			$class = str_replace('\\', '/', $class);
			$file = ROOT.$class.'.php';
			if(is_file($file)){
				require_once $file;
				self::$classMap[$class] = $class;
			}else{
				return false;
			}
		}

	}

	
	

	

}

