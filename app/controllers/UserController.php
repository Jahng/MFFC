<?php
namespace MFFC\Controllers;
use \MFFC\Models as Models;

class UserController extends BaseController{
	
	public function __construct(){
		parent::__construct();
	}

	public function info(){
		$info = Models\UserModel::first();
		$template = $this->twig->load('userinfo.html');
		echo $template->render(array('userinfo' => $info));
	}
}