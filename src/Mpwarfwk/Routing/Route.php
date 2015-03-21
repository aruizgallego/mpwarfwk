<?php

namespace Mpwarfwk\Routing;

Class Route{
	
	private $class;
	private $accion;

	public function __construct($class, $accion){
		$this->class = $class;
		$this->accion = $accion;
	}

	public function getClass(){
		return $this->class;
	}


	public function getAccion(){
		return $this->accion;
	}

}