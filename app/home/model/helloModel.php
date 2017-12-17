<?php
namespace app\home\model;
use core\lib\model;
class helloModel extends model{
	public $table='php34_hello';

	//list
	public function getList(){
		//$model = new model();
		$data = $this->select($this->table,['id','name']);
		return $data;
	}

	public function getOne($id){
		$data = $this->select($this->table,'*',['id'=>$id]);
		return $data;
	}

	public function setOne($id,$data){
		$rst = $this->update($this->table,$data,array('id'=>$id));
		return $rst;
	}

	public function deleteOne($id){
		$data = $this->delete($this->table,['id'=>$id]);
		return $data;
	}


}