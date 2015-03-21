<?php

namespace Mpwarfwk;
use Smarty;
use Templating;

Class SmartyTemplate implements Templating{

	private $view;

	public function __construct(){
		$this->view = new Smarty();
	}
	
	public function render($template){
		return $this->view->fetch($template);
	}

	public function assignVars($variables){
		foreach ($variables as $key =>value){
			return $this->view->assign($key,$value);
		}
	}

}
