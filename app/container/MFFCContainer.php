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
		// add log service to container 
		$this->container->add('StreamOutput', function(){
			return new Output\StreamOutput(fopen('./log/debug.log','a',false));
		});

		$this->container->add('ConsoleLogger','Symfony\Component\Console\Logger\ConsoleLogger')->withArgument('StreamOutput');

		// add redis service to container
		$this->container->add('RedisClient',function(){
			$redis_config = array(
			    'scheme' => 'tcp',
			    'host'   => '192.168.1.111',
			    'port'   => 6379,
			);
			return new \Predis\Client($redis_config);
		});
	}

	public function get($service){
		return $this->container->get($service);
	}
}