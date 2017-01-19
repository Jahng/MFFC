<?php
namespace MFFC\Controllers;
use \MFFC\Models as Models;

class HomeController extends BaseController{
	

	public function home(){
		$this->logger->error('This is home page');
		$template = $this->twig->load('home.html');
		echo $template->render();
	}
}