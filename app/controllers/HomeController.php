<?php
namespace MFFC\Controllers;
use \MFFC\Models as Models;

class HomeController extends BaseController{
	

	public function home(){
		//$this->container->get('ConsoleLogger')->error('this is home page');// test log
		$template = $this->twig->load('index.html');
		echo $template->render();
	}
	public function about(){
		$template = $this->twig->load('about.html');
		echo $template->render();
	}
	public function contact(){
		$template = $this->twig->load('contact.html');
		echo $template->render();
	}
	public function portfolio(){
		$template = $this->twig->load('portfolio.html');
		echo $template->render();
	}
	public function services(){
		$template = $this->twig->load('services.html');
		echo $template->render();
	}
}