<?php

namespace Mpwarfwk;

use Mpwarfwk\Request;
use Mpwarfwk\TwigTemplate;
use Mpwarfwk\SmartyTemplate;

Abstract Class BaseController{


	protected $twig;
	protected $smarty;
	//shortcut para uso de plantillas 
		//$this->template() (desde cualquier controller)
		//devuelve response	

	public function __construct(){

		$this->twig = new TwigTemplate();
		$this->smarty = new SmartyTemplate();
	}


}