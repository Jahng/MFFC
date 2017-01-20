<?php
namespace MFFC\Controllers;

use MFFC\Container\MFFCcontainer;
use League\Container\Container;

class BaseController{
	
	protected $twig = null; 
	protected $container = null;

	public function __construct(){
		$loader = new \Twig_Loader_Filesystem('./app/views');
		$this->twig = new \Twig_Environment($loader, array('cache'=>'./cache/compilation_cache'));

		$this->container = new MFFCcontainer(new Container);
	}
}