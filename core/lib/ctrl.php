<?php
namespace core\lib;
use core\wangk;
use core\lib\response;
class Ctrl extends wangk{

	public $assignData = array();
	const DEFAULT_TYPE = "json";
    public $smarty;
    public $viewPath ='';

    public function __construct(){
        $this->viewPath = APP.'/'.self::$_route['module'].'/view';
        if(TEMPLATE==2){
            //smarty
            $this->smarty = new \Smarty();
            $this->smarty->setCompileDir( ROOT.'/log/smarty/compile/');
            // $smarty->setConfigDir(TPL. '/views/smarty_configs/');
            $this->smarty->setCacheDir( ROOT.'/log/smarty/cache/');
            $this->smarty->caching        = false;
            $this->smarty->cache_lifetime = 0;
        }
        
    }
	public function assign($key,$value){ 
        switch (TEMPLATE) {
            case 2:
                $this->smarty->assign($key,$value);
                break;
            default:
                $this->assignData[$key] = $value;
                break;
        }
    
    }

	public function display($file){ //action==file

		$filePath = $this->viewPath.'/'.self::$_route['ctrl'].'/'.self::$_route['action'].'.html';
		if(is_file($filePath)){	
		     $data = $this->assignData;
             $data = !empty($data)?$data:array();
             switch (TEMPLATE) {
                case 2:
                    //设置smarty      
                     $this->smarty->setTemplateDir($this->viewPath.'/'.self::$_route['ctrl'].'/'); //设置模板目录
                     $tpl = self::$_route['action'];
                     $this->smarty->display($tpl.'.html');
                    break;
                case 3:
                    //所有的view都在设置的viewpath中查找 
                        \Twig_Autoloader::register();
                        $loader = new \Twig_Loader_Filesystem($this->viewPath);// 存放试图视图文件夹位置 很重要
                        $twig = new \Twig_Environment($loader,array(//缓存目录
                            'cache' => ROOT.'/log/twig',
                            'debug' => DEBUG
                        ));
                    $template = $twig->loadTemplate('/'.self::$_route['ctrl'].'/'.self::$_route['action'].'.html'); 
                    $template->display($data);
                    break;   
                default:
                   extract($data);
                  
                  //p($filePath);exit();
                   require_once $filePath;
                   break;
            }
      
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