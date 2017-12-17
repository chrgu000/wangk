<?php
namespace core\lib;
use core\lib\conf;
//use \PDO as PDO;
use Medoo\Medoo as Medoo;
//class model extends PDO{
class model extends Medoo{
	public function __construct(){
		//pdo的方式连接
		// $config = Conf::all('db');
		// $dsn = $config['DSN'];
		// $username = $config['USERNAME'];
		// $pwd = $config['PWD'];	

		// try{
		// 	parent::__construct($dsn,$username,$pwd);
		// }catch(\Exception $e){
		// 	p($e->getMessage());
		// }
		// 
		
		//采用medoo的连接方式 
		$config = Conf::all('medoo');
		parent::__construct($config);
		
	}


}
