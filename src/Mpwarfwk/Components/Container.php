<?php

namespace Mpwarfwk\Components;

Class Container{

	private $arguments;

	public function get($service){

		include DOCUMENT_ROOT.'/src/Config/Services.php';
		$arguments = array();

		if (!empty($config[$service])){
			if(!empty($config[$service]['arguments'])){
				//var_dump($config[$service]['arguments']);
					foreach ($config[$service]['arguments'] as $argument){
						$arguments[] = new $argument();
					}
			}


			$reflection = new \ReflectionClass($config[$service]['class']);
			return $reflection->newInstanceArgs($arguments);
		}
	
		throw new \InvalidArgumentException();
	}

	//MODO RECURSIVO
	/*public function get($service){

		include DOCUMENT_ROOT.'/src/Config/Services.php';
		$arguments = array();

		$conf = $config;

		$this->getRecursive($conf,$service);
	
		throw new \InvalidArgumentException();
	}

	public function getRecursive(&$config, $service){


		if(!empty($config[$service]['arguments'])){

			foreach ($config[$service]['arguments'] as $argument){
				$arg = substr($argument, 1, 100);
				$this->getRecursive($config,$arg);
			}
			
		}
		echo "Instancio: ".$config[$service]['class'].'<br>';
		$this->arguments[] = new $config[$service]['class']();
		echo "con Argumentos: ".var_dump($this->arguments).'<br><br>';
		
			//$reflection = new \ReflectionClass($config[$service]['class']);
			//return $reflection->newInstanceArgs($arguments);
	}*/
}




