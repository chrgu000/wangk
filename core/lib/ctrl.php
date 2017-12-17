<?php
namespace core\lib;
use core\wangk;
use core\lib\response;
class Ctrl extends wangk{

	public $assignData = array();
	const DEFAULT_TYPE = "json";
	public function assign($key,$value){
		$this->assignData[$key] = $value;
	}

	public function display($file){
		$_file = explode('/',$file);
		$filePath = APP.'/'.self::$_module.'/view/'.$file.'.html';
		$viewPath = APP.'/'.self::$_module.'/view';
		$data = $this->assignData;
		if(is_file($filePath)){	
			//载入twig的模板引擎
			\Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem($viewPath);// 存放试图视图文件夹位置 很重要
			$twig = new \Twig_Environment($loader,array(//缓存目录
                'cache' => ROOT.'/log/twig',
                'debug' => DEBUG
            ));
            $template = $twig->loadTemplate('/'.$_file[0].'/'.$_file[1].'.html'); //所有的view都在设置的viewpath中查找
            $template->display(empty($data)?array():$data);
		}
	}

	public function rst($code, $message,$data){
         return Response::rst($code, $message,$data);
    }

	public function show($code, $message,$data){
         Response::show($code, $message,$data);
    }

	/**
     * 返回json数据
     */
    public function renderJson($code, $message,$data){
         Response::show($code, $message,$data);
    }
    /**
     * 返回成功的json数据
     */
    public function success($data){
         $this->renderJson(0,'成功',$data);
    }
    /**
     * 返回失败的json数据
     */
    public function error($code, $message,$data){
        $this->renderJson($code, $message,$data);
    }

    /**
     * 重定向
     */
    public function redirect($url){
        header('location:'.$url);
        exit();
    }
}