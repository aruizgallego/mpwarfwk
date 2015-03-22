<?php

namespace Mpwarfwk\Components;
use Symfony\Component\Yaml\Yaml;

Class i18n
{
 	
	public function __construct(){

	}

	public function get($keyword, $language){

		$translateArray = Yaml::parse(file_get_contents(DOCUMENT_ROOT.'/src/Config/Languages/'.$language.'.yml'));

		foreach ($translateArray as $key => $value) {
			if ($keyword == $key){
				return $value;
			}
		}
		return false;

	}

}
