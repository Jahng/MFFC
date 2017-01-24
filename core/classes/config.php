<?php
namespace MFFC\core\classes;

use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;

class config{
	private $config_path = './config/yml/';
	private $value = NULL;

	public function set_config($yml){
		try {
		    $this->value = Yaml::parse(file_get_contents($this->config_path.$yml));
		    return $this;
		} catch (ParseException $e) {
		    printf("Unable to parse the YAML string: %s", $e->getMessage());
		}
	}

	public function get_config(){
		return $this->value;
	}

}