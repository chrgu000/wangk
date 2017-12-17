<?php
namespace core\lib;
class Conf {

	public static $config=array();

	/**
	 * 从配置文件中取name的值
	 */
	public static function get($name,$file){
		/**
		 * 
		 * 1.配置文件是否存在
		 * 2.配置是否存在
		 * 3.缓存配置文件
	 	*/
		if(isset(self::$config[$file])){
			return self::$config[$file][$name];
		}else{
			$filePath =	CORE.'/config/'.$file.'.php';
		 	if(is_file($filePath)){
		 		$_config = require_once $filePath; //接受载入文件的返回值
		 		if(isset($_config[$name])){
		 			//缓存配置+测试
		 			self::$config[$file] = $_config;
		 			return $_config[$name];
		 		}else{
		 			throw new \Exception("error:can not find config item ".$name);
		 		}
		 	}else{
		 		throw new \Exception("error:can not find config file ".$file);	 		
		 	}	
		}
	}

	/**
	 * 返回全部的配置项
	 */
	public static function all($file){
		if(isset(self::$config[$file])){
			return self::$config[$file];
		}else{
			$filePath =	CORE.'/config/'.$file.'.php';
		 	if(is_file($filePath)){
		 		$_config = require_once $filePath; //接受载入文件的返回值
		 			//缓存配置+测试
		 			self::$config[$file] = $_config;
		 			return $_config;	
		 	}else{
		 		throw new \Exception("error:can not find config file ".$file);	 		
		 	}	
		}

	}

}
