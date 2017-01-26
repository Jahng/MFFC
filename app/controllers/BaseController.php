<?php
namespace MFFC\Controllers;

use MFFC\Container\MFFCContainer;
use League\Container\Container;

class BaseController{
	
	protected $twig = null; 
	protected $container = null;

	public function __construct(){
		$loader = new \Twig_Loader_Filesystem('./app/Views');
		$this->twig = new \Twig_Environment($loader, array('cache'=>'./cache/compilation_cache'));

		$this->container = new MFFCContainer(new Container);
	}
}