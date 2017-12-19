<?php
namespace app\home\ctrl;
use core\lib\ctrl;

class ImgCtrl extends Ctrl{

	public function add(){
		
		if(!empty($_POST)){
			dump($_POST);
			dump($_FILES);
		}
		$this->display('add');

	}



	public function save(){

		dump($_FILES);

		// $res = $this->_uploadObj->upload();

  //       if($res) {
  //           return '/' .self::UPLOAD . '/' . $res['file']['savepath'] . $res['file']['savename'];
  //       }else{
  //           return false;
  //       }

	}

	

	
}

