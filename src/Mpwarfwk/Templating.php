<?php

namespace Mpwarfwk;

Interface Templating{

	public function __construct();
	
	public function render($template);

	public function assignVars($variables);
}
