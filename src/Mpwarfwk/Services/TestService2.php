<?php

namespace Mpwarfwk\Services;

Class TestService2{
	
	public function __construct($subservice1, $subservice2){

		echo "Construct TestService2 con Subservice1 y Subservice 2 Inyectados<br>";

	}

	public function run(){
		echo "RUN TestService2 <br>";
	}


}