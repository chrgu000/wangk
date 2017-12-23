<?php
namespace app\home\ctrl;
use core\lib\ctrl;

		
//这是用来测试hui-ui的		
class HuiCtrl extends Ctrl{

	public function index(){
		
		$this->display('index');
	}

	//nav
	public function nav(){
		$this->display('nav');
	}

	
}

