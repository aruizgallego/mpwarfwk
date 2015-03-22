<?php

namespace Mpwarfwk\Routing;
use Mpwarfwk\Components\Request;
use Symfony\Component\Yaml\Yaml;

Class Routing
{

	const DEFAULT_CLASS = 'Controller\Home\Home';
	const METHOD_CLASS = 'welcome';
 	
	public function __construct(){

	}

	public function getRoute(Request $request){

		$url = $request->server->get('REQUEST_URI');

		$route = Yaml::parse(file_get_contents(DOCUMENT_ROOT.'/src/Config/Route.yml'));

		$urlParts = explode('/',$url); 
		
		if(count($urlParts)>2){
			$urlKey = $urlParts[1].'/'.$urlParts[2];
		}else{
			$urlKey = $urlParts[1];
		}
		
		$clase = self::DEFAULT_CLASS;
		$metodo = self::METHOD_CLASS;
		foreach ($route as $key => $value) {
			
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
			}
		}
		$route = new Route($clase, $metodo);
		return $route;

	}

}
