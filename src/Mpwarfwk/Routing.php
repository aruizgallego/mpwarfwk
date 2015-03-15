<?php

namespace Mpwarfwk;

Class Routing
{
 	
 	private $url;
 	public $clase;
 	public $metodo;
 	public $parameto;

	public function __construct($url){

		$this->url = $url;
	}

	public function getRoute(){
		
		include DOCUMENT_ROOT.'/src/'.'config.php';

		//$url = str_replace('/','',$url);
		foreach ($route as $key => $value) {
			if ($this->url == $key){
				$val = preg_replace('#^'.$key.'$#', $value, $this->url);
				$dir = explode('\\',$val);
			//desmonto
				$this->clase = $dir[0].'\\'.$dir[1].'\\'.$dir[2];
				if(count($dir)>3){
					$this->metodo = $dir[3];
				}
				if(count($dir)>4){
					$this->parameto = $dir[4];
				}

				return;
			}

		}

		
		//return "Controller\\Home\\Home";

	}

}
