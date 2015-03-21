<?php

namespace Mpwarfwk;
use Twig;
use Templating;

Class TwigTemplate implements Templating{

	private $twig;
	
	public function __construct(){

		$config = array(
			'cache' => 'path/cache/',
			'debug' => true,
		);

		$loader = new \Twig_Loader_Filesystem( DOCUMENT_ROOT.'/src/views/' );
		$twig = new \Twig_Environment( $loader, $config );
		$this->twig = $twig;

	}

	public function render($path, $variables = array()){

		//$template = $this->view->loadTemplate($path)
		return $this->twig->render($path,$variables);

	}
}

