<?php
namespace MFFC\core\classes;
use MFFC\Container\MFFCcontainer;
use League\Container\Container;
use NoahBuscher\Macaw\Macaw;
class bootstrap{
	protected $container = null;

	public function __construct(){
		$this->container = new MFFCcontainer(new Container);
		$this->_route_init();
	}

	private function _route_init(){
		$routes = $this->container->get('ConfigService')->set_config('route.yml')->get_config();
		foreach($routes as $route){
			Macaw::$route['method']($route['path'],$route['controller']);
		}
		Macaw::dispatch();
	}
}