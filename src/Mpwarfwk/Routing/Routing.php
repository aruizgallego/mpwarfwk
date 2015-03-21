<?php

namespace Mpwarfwk\Routing;

Class Routing
{
 	
	public function __construct(){

	}

	public function getRoute(Request $request){

		$url = $request->server->get('REQUEST_URI');

		include DOCUMENT_ROOT.'/src/Config/Route.php';

		$urlParts = explode('/',$url); 
		
		$urlKey = $urlParts[1].'/'.$urlParts[2];

		foreach ($route as $key => $value) {
			$metodo = 'index';
			if ($urlKey == $key){
				$val = preg_replace('#^'.$key.'$#', $value, $urlKey);
				$dir = explode('\\',$val);

				$clase = $dir[0].'\\'.$dir[1].'\\'.$dir[2];
				if(count($dir)>3){
					$metodo = $dir[3];
				}
				if(count($dir)>4){
					$parameto = $dir[4];
				}

				$route = new Route($clase, $metodo);
				return $route;
			}
		}
		return false;

	}

}
