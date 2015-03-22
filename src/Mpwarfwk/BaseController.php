<?php

namespace Mpwarfwk;

use Mpwarfwk\Components\Request;
use Mpwarfwk\Components\i18n;
use Mpwarfwk\Templating\TwigTemplate;
use Mpwarfwk\Templating\SmartyTemplate;
use Mpwarfwk\Database\SQL;

Abstract Class BaseController{


	protected $twig;
	protected $smarty;
	protected $db;
	protected $i18n;
	//shortcut para uso de plantillas 
		//$this->template() (desde cualquier controller)
		//devuelve response	

	public function __construct(){

		$this->twig = new TwigTemplate();
		$this->smarty = new SmartyTemplate();
		$this->db = new SQL('127.0.0.1','3306','frameworkdb','mpwaruser','1234');
		$this->i18n = new i18n();
	}


}