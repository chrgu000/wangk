<?php
namespace core\lib\drive\log;
use core\lib\conf;
class File{
	public $path;//记录日志的存储位置

	public function __construct(){
		$path = Conf::get('OPTION','log');
		$this->path = $path['PATH'];
	} 


	public  function log($msg,$file='log'){
		/**
		 * 1.日志文件是否存在
		 * 2.写入文件
		 */
		$dir = $this->path.'/'.date('Y-m-d');
		if(!is_dir($dir)){
			mkdir($dir,'0777',true);
		}
		$msg = date('Y-m-d H:i:s',time()).'  '.$msg;
		return file_put_contents($dir.'/'.$file.'.php',json_encode($msg).PHP_EOL,FILE_APPEND);
		
	}
}
