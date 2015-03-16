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

        $request = new Request(new Session());

        $routing = new Routing();
        $route = $routing->getRoute($request);
        
        $response = $this->executeController($route, $request);

        return $response;
    }

    public function executeController($route, $request)
    {
        $controller_class = new $route->getClass();
        return  call_user_func(array($controller_class, $route->getAccion()));
        
    }



}



