<?php
namespace app\home\ctrl;
use core\lib\ctrl;

/**
 * 这是对正则表达式的内容测试
 */
class PregCtrl extends Ctrl{

	public function index(){
		dump('test git');
		dump($_GET);

	}

	//测试元数据
	public function unit(){
		// $pattern = '/Windows\d+/'; 
		// $str = "boWindowse221.com"; 
		// $pattern = '/\b\w{6}\b/';
	    //  $str = "bo Window .com"; 
		$pattern = '/^\d{5,12}$/';
	    $str = "1234777"; 
	    preg_match($pattern, $str, $match); 
	    dump($match);

	}

	//引用删除
	public function yingy(){
		echo "<br />";
		$v3 = 'val';
		$v4 = &$v3;
		unset($v4);
		var_dump($v3);
	}

	//得到系统已定义的变量
	public function sysInfo(){
		dump(get_defined_vars());
		dump(get_defined_constants());
	}

	//预定义的变量
	public function beforeDefine(){
		dump(__CLASS__);
		dump(__NAMESPACE__);
	}

	public function str(){
		$s = 'hello\\world';
		$s = "hi\r\nhhh";
		dump($s);
	}


	
}

