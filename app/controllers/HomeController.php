<?php
namespace MFFC\Controllers;
use \MFFC\Models as Models;

class HomeController extends BaseController{
	

	public function home(){
		//$this->container->get('ConsoleLogger')->error('this is home page');// test log
		$Article_model = new Models\ArticleModel();
		$header_article = $Article_model->findOne(1);

		//list

		$list = $Article_model->findList(array('cid' => 2));

		$data = array(
			'header_article' => $header_article,
			'list' => $list
		);
		echo $this->twig->render('index.html', $data);
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