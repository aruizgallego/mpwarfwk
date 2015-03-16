<?php

namespace Mpwarfwk;

use Mpwarfwk\Session;

class Parameters
{

    protected $parameters;

 	public function __construct($parameters)
    {
    	$this->parameters = $parameters;
    }

    //get sets all, has, remove etc fantasia extrema

    public function get($key){
    	return $this->parameters[$key];
    }


    public function getRowValue($key)
    {
        if(!empty($this->parameters[$key])){
			return $this->parameters[key];
		}
		return false;
    }



}

