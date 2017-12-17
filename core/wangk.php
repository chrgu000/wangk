<?php
namespace core;
use core\lib\log;
use core\lib\route;
class wangk{

	public static $classMap = array();
	public $assignData=array();
	public static $_module;
	public function __construct(){
		//echo 11111;
	}

	public static function run(){
		Log::init();//启动日志类
		$route = new Route();//加载路由类	
		$module = $route->module;
		self::$_module = $module;//static中记录_module
		$ctrl = $route->ctrl;
		$action = $route->action;
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

	
	public function _assign($key,$value){
		$this->assignData[$key] = $value;
	}

	public function _display($file){
		$_file = explode('/',$file);//判断
		$filePath = APP.'/'.self::$_module.'/view/'.$file.'.html';
		$viewPath = APP.'/'.self::$_module.'/view';
		$data = $this->assignData;
		if(is_file($filePath)){
			//原生的模板
			//p($this->assignData);
			//extract($this->assignData);
			//require_once $filePath;
			
			//载入twig的模板引擎
			\Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem($viewPath);// 存放试图视图文件夹位置 很重要
			$twig = new \Twig_Environment($loader,array(//缓存目录
                'cache' => ROOT.'/log/twig',
                'debug' => DEBUG
            ));
            $template = $twig->loadTemplate('/'.$_file[0].'/'.$_file[1].'.html'); //所有的view都在设置的viewpath中查找
            $template->display(empty($data)?array():$data);
		}
	}

}

