<?php
namespace app\admin\ctrl;
use core\lib\model;
//use core\wangk;
use core\lib\conf;
//use app\home\model\helloModel;
use core\lib\ctrl;
class adminCtrl extends Ctrl{

	public function __construct(){
		
	}

	public function index(){

		$data = 'hello php in admin';
		$this->assign('data',$data);
		$this->display('admin/index');
	}

	public function add(){

	}
}

