<?php
namespace MFFC\Controllers;
use \MFFC\Models as Models;

class UserController extends BaseController{
	
	public function __construct(){
		parent::__construct();
	}

	public function info(){
		$user_model = new Models\UserModel();
		$info = $user_model->findAll();
		$template = $this->twig->load('userinfo.html');
		echo $template->render(array('userinfo' => $info));
	}
}