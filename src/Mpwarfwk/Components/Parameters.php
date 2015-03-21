<?php

namespace Mpwarfwk\Components;

use Mpwarfwk\Components\Session;

class Parameters
{

    protected $parameters;

 	public function __construct($parameters)
    {
    	$this->parameters = $parameters;
    }

    //get sets all, has, remove etc fantasia extrema

    public function get($key){
    	if(!empty($this->parameters[$key])){
            return $this->parameters[$key];
        }
        return false;
    }

    public function set($key, $value){
        $this->parameters[$key] = $value;
    }

    public function exists($key){
        if (array_key_exists($key, $this->parameters)){
            return true;
        }else{
            return false;
        }
    }

    public function getAll()
    {
        return $parameters;
    }



}

