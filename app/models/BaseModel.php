<?php

namespace MFFC\Models;

use Doctrine\ORM\Tools\Setup as Setup;
use Doctrine\ORM\EntityManager as EntityManager;

class BaseModel{
	protected  $EntityManager = NULL;

	public function __construct(){
		require_once './config/database.php';
		$isDevMode = true;
		$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/app/models"), $isDevMode);
		$conn = $database;
		// obtaining the entity manager
		$this->entityManager = EntityManager::create($conn, $config);
	}

	protected function getName(){

	}
}