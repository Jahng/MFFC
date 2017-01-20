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
		$this->container->add('StreamOutput', function(){
			return new Output\StreamOutput(fopen('./log/debug.log','a',false));
		});

		$this->container->add('ConsoleLogger','Symfony\Component\Console\Logger\ConsoleLogger')->withArgument('StreamOutput');
	}

	public function get($service){
		return $this->container->get($service);
	}
}