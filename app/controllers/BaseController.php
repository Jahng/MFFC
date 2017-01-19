<?php
namespace MFFC\Controllers;

use Kronos\Log;

class BaseController{
	
	protected $twig = null; 
	protected $log = null;

	public function __construct(){
		$loader = new \Twig_Loader_Filesystem('./app/views');
		$this->twig = new \Twig_Environment($loader, array('cache'=>'./cache/compilation_cache'));

		$this->logger = new Log\Logger();
		$debug = new Log\Writer\File('./log/debug.log', new Log\Adaptor\FileFactory());
		$this->logger->addWriter($debug);
	}
}