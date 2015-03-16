<?php

namespace Mpwarfwk;

class Session
{

 	public function __construct()
    {
    	session_start();
    }


    public function getValue($key){
    	return $_SESSION[$key];
    }

    public function setValue($key, $value)
    {
        $_SESSION[$key] = $value;
    }



}

