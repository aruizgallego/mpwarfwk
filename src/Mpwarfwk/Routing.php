<?php

namespace Mpwarfwk;

Class Routing
{
 	
	public function __construct(){

	}

	public function getRoute(Request $request){

		$url = $request->server->get('REQUEST_URI');

		include DOCUMENT_ROOT.'/src/config.php';

		$url = $this->cleanUrl($url);

		foreach ($route as $key => $value) {
			$metodo = 'index';
			if ($url == $key){
				$val = preg_replace('#^'.$key.'$#', $value, $url);
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

	private function cleanUrl($url){
		$url = filter_var($url, FILTER_SANITIZE_URL);
		
		$url_array = str_split($url);
		if(end($url_array) == '/'){
			array_pop($url_array);
		}
		return implode($url_array);
	}

}
