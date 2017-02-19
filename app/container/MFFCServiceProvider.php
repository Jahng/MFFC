<?php
namespace MFFC\Container;

use League\Container\ServiceProvider\AbstractServiceProvider;
use Symfony\Component\Console\Output as Output;

class MFFCServiceProvider extends AbstractServiceProvider
{
	 /**
     * The provides array is a way to let the container
     * know that a service is provided by this service
     * provider. Every service that is registered via
     * this service provider must have an alias added
     * to this array or it will be ignored.
     *
     * @var array
     */
    protected $provides = [
        'ConfigService',
        'StreamOutput',
        'ConsoleLogger',
        'RedisClient'
    ];

    /**
     * This is where the magic happens, within the method you can
     * access the container and register or retrieve anything
     * that you need to, but remember, every alias registered
     * within this method must be declared in the `$provides` array.
     */
    public function register()
    {
    	// add config service to container
		$this->getContainer()->add('ConfigService','MFFC\core\classes\config');

		// add log service to container 
		$this->getContainer()->add('StreamOutput', function(){
			return new Output\StreamOutput(fopen('./log/debug.log','a',false));
		});
		$this->getContainer()->add('ConsoleLogger','Symfony\Component\Console\Logger\ConsoleLogger')->withArgument('StreamOutput');

		// add redis service to container
		$config = $this->getContainer()->get('ConfigService')->set_config('config.yml')->get_config();
		if($config['redis']['enable'] == true){
			$this->getContainer()->add('RedisClient',function() use($config){
				$redis_config = $config['redis']['config'];
				return new \Predis\Client($redis_config);
			});
		}
    }
}