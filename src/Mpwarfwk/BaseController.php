<?php

namespace Mpwarfwk;

use Mpwarfwk\Components\Request;
use Mpwarfwk\Templating\TwigTemplate;
use Mpwarfwk\Templating\SmartyTemplate;
use Mpwarfwk\Database\SQL;

Abstract Class BaseController{


	protected $twig;
	protected $smarty;
	protected $db;
	//shortcut para uso de plantillas 
		//$this->template() (desde cualquier controller)
		//devuelve response	

	public function __construct(){

		$this->twig = new TwigTemplate();
		$this->smarty = new SmartyTemplate();
		$this->smarty = new SQL();
	}


}