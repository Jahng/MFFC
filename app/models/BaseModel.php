<?php

namespace MFFC\Models;

use Doctrine\ORM\Tools\Setup as Setup;
use Doctrine\ORM\EntityManager as EntityManager;

class BaseModel{
	protected  $EntityManager = NULL;

	public function __construct(){
		$isDevMode = true;
		$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/app/models"), $isDevMode);
		// database configuration parameters
		$conn = array(
		    'driver' => 'pdo_mysql',    
		    'user'     => 'root',
		    'password' => '',
		    'dbname'   => 'mffc',
		);

		// obtaining the entity manager
		$this->entityManager = EntityManager::create($conn, $config);
	}

	protected function getName(){

	}
}