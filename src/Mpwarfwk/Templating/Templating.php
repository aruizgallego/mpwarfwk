<?php

namespace Mpwarfwk\Templating;

Interface Templating{

	public function __construct();
	
	public function render($template, $variables);

}
