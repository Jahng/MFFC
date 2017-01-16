<?php
namespace MFFC\Controllers;
use \MFFC\Models as Models;

class HomeController extends BaseController{
	
	public function __construct(){
		parent::__construct();
	}

	public function home(){
		echo 'Home';
	}
}