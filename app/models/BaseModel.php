<?php

namespace MFFC\Models;

use Doctrine\ORM\Tools\Setup as Setup;
use Doctrine\ORM\EntityManager as EntityManager;
use MFFC\Container\MFFCcontainer;
use League\Container\Container;

class BaseModel{
	protected  $EntityManager = NULL;
	protected $container = null;

	public function __construct(){
		$this->container = new MFFCcontainer(new Container);
		$config_parameter = $this->container->get('ConfigService')->set_config('config.yml')->get_config();
		$isDevMode = true;
		$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/app/models"), $isDevMode);
		// obtaining the entity manager
		$this->entityManager = EntityManager::create($config_parameter['database'], $config);
	}

	protected function getName(){

	}
}