<?php
namespace MFFC\Container;

use Symfony\Component\Console\Output as Output;
use League\Container\Container;

class MFFCContainer{

	private $container = null;

	public function __construct(Container $container){
		$this->container = $container;
		$this->init();
	}


	private function init(){

		// add config service to container
		$this->container->add('ConfigService','MFFC\core\classes\config');

		// add log service to container 
		$this->container->add('StreamOutput', function(){
			return new Output\StreamOutput(fopen('./log/debug.log','a',false));
		});

		$this->container->add('ConsoleLogger','Symfony\Component\Console\Logger\ConsoleLogger')->withArgument('StreamOutput');

		// add redis service to container
		$config = $this->container->get('ConfigService')->set_config('config.yml')->get_config();
		if($config['redis']['enable'] == true){
			$this->container->add('RedisClient',function() use($config){
				$redis_config = $config['redis']['config'];
				return new \Predis\Client($redis_config);
			});
		}
	}

	public function get($service){
		return $this->container->get($service);
	}
}