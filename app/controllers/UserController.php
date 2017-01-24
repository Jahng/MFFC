<?php
namespace MFFC\Controllers;
use \MFFC\Models as Models;
use Illuminate\Support\Facades\Cache;

class UserController extends BaseController{
	
	public function __construct(){
		parent::__construct();
	}

	public function info(){
		$user_model = new Models\UserModel();
		$info = $user_model->findAll();

		// test case for RedisClient service
		//$this->container->get('RedisClient')->set('info', json_encode($info));//annotated, since the redis is set to disabled in config.yml

		$template = $this->twig->load('userinfo.html');
		echo $template->render(array('userinfo' => $info));
	}
}