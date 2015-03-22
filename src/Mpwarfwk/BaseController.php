<?php

namespace Mpwarfwk;

use Mpwarfwk\Components\Request;
use Mpwarfwk\Components\i18n;
use Mpwarfwk\Templating\TwigTemplate;
use Mpwarfwk\Templating\SmartyTemplate;
use Mpwarfwk\Database\SQL;
use Symfony\Component\Yaml\Yaml;

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

		$database = Yaml::parse(file_get_contents(DOCUMENT_ROOT.'/src/Config/Database.yml'));

		$this->db = new SQL($database['host'],$database['port'],$database['dbname'],$database['user'],$database['password']);
		$this->i18n = new i18n();
	}


}