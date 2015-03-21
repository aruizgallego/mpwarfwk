<?php

namespace Mpwarfwk\Templating;
use Smarty;
use Mpwarfwk\Templating\Templating;

Class SmartyTemplate implements Templating{

	private $smarty;

	public function __construct(){
		$this->smarty = new Smarty();
	}
	
	public function render($template, $variables){
		$this->assignVars($variables);
		return $this->smarty->display(DOCUMENT_ROOT.'/src/Templates/'.$template);
	}

	public function assignVars($variables){
		foreach ($variables as $key => $value){
			return $this->smarty->assign($key,$value);
		}
	}

}
