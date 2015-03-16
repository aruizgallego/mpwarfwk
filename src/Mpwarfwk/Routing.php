<?php

namespace Mpwarfwk;

Class Routing
{
 	
 	public $clase;
 	public $metodo;
 	public $parameto;

	public function __construct(){

		$this->metodo = 'index';
	}

	public function getRoute(Request $request){

		$url = $request->server->getString('REQUEST_URI');

		include DOCUMENT_ROOT.'/src/'.'config.php';

		//$url = str_replace('/','',$url);

		foreach ($route as $key => $value) {

			if ($url == $key){
				$val = preg_replace('#^'.$key.'$#', $value, $url);
				$dir = explode('\\',$val);

				$this->clase = $dir[0].'\\'.$dir[1].'\\'.$dir[2];
				if(count($dir)>3){
					$this->metodo = $dir[3];
				}
				if(count($dir)>4){
					$this->parameto = $dir[4];
				}

				$route = new Route($this->clase, $this->metodo);
				return $route;
			}
		}
		//return "Controller\\Home\\Home";

	}

}
