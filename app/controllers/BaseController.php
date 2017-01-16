<?php
namespace MFFC\Controllers;

class BaseController{
	
	protected $twig = null; 

	public function __construct(){
		$loader = new \Twig_Loader_Filesystem('./app/views');
		$this->twig = new \Twig_Environment($loader);
	}
}