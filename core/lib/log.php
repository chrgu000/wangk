<?php
namespace core\lib;
use core\lib\conf;
class Log{
	public static $driveClass;  //存储实例化的驱动类
	
	/**
	 * 日志驱动
	 *1.确定日志的存储方式
	 *2.写日志 
	 */
	public static function init(){
		//初始化存储方式
		$drive = Conf::get('DRIVE','log');	
		$_driveClass = '\core\lib\drive\log\\'.$drive;//加载配置的驱动类
		self::$driveClass = new $_driveClass();
	}

	/**
	 * 写日志
	 */

	public static function log($msg,$file='log'){
		self::$driveClass->log($msg,$file);

	}

}