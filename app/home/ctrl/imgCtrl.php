<?php
namespace app\home\ctrl;
use core\lib\ctrl;

class ImgCtrl extends Ctrl{

	public function add(){
		
		if(!empty($_POST)){
			dump($_POST);
			dump($_FILES);
		}
		$this->display('img/add');

	}

	

	
}

