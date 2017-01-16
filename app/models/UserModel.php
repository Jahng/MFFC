<?php

namespace MFFC\Models;

class UserModel extends BaseModel{
	public function __construct(){
		parent::__construct();
	}

	public static function first(){
	  	$dbh = new \PDO('mysql:host=localhost;dbname=mffc', 'root', '1234abcd');
	  	$result = [];
	  	foreach($dbh->query('SELECT * from mffc_user') as $row) {
        	$result[] = $row;
    	}
    	return $result;
	}

}