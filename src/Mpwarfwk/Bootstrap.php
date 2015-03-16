<?php

namespace Mpwarfwk;

class Bootstrap
{

    protected $environment;

 	public function __construct($environment)
    {
    	$this->environment = $environment;
        echo 'Constructor de Bootstrap<br/>';
    }

    public function execute()
    {
        $routing = new Routing($_SERVER['REQUEST_URI']);

        $routing->getRoute();
        //$request = new Request($clase, $metodo, $parametros);

        $controller = new $routing->clase();
        call_user_func(array($controller, $routing->metodo));
    }



}



