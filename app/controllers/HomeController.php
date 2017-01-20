<?php
namespace MFFC\Controllers;
use \MFFC\Models as Models;

class HomeController extends BaseController{
	

	public function home(){
		$this->container->get('ConsoleLogger')->error('this is home page');
		$template = $this->twig->load('home.html');
		echo $template->render();
	}
}