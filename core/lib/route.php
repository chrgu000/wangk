<?php
namespace core\lib;
use core\lib\conf;
class Route{
	// public $module=MODULE;
	// public $ctrl='CTRL';
	// public $action=ACTION;
	function __construct(){
		//htaccess设置
		//路由分析  /    index.php/Home/Index/index/id/1		
		$path = $_SERVER['REQUEST_URI'];
 //p($_REQUEST);	
		if(isset($path) && $path!='/'){
			$pathArr = explode('/', ltrim($path,'/'));		
			//重置路由
			if(isset($pathArr[0])){
				$this->module = $pathArr[0];
				unset($pathArr[0]);
			}
			if(isset($pathArr[1])){
				$this->ctrl = $pathArr[1];
				unset($pathArr[1]);
			}
			if(isset($pathArr[2])){
				$this->action = $pathArr[2];
				unset($pathArr[2]);
			}
			//参数解析
			$count = count($pathArr);
			//$paras = array();
			//p($pathArr);
			for($i=3;$i<$count+3;$i=$i+2){
				if(isset($pathArr[$i+1])){//处理参数不匹配的
					$_GET[$pathArr[$i]] = $pathArr[$i+1];
				}
			}

			//$_GET['paras'] = $paras;
			
		 }else{
		     $this->module = Conf::get('MODULE','config');
			 $this->ctrl =  Conf::get('CTRL','config');
			 $this->action = Conf::get('ACTION','config');
		 }
	}


}

