<?php

namespace Mpwarfwk;
use Mpwarfwk\Components\Request;
use Mpwarfwk\Components\Session;
use Mpwarfwk\Routing\Routing;

class Bootstrap
{

    protected $environment;

 	public function __construct($environment)
    {
    	$this->environment = $environment;
        //echo 'Constructor de Bootstrap<br/>';
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
        $class = $route->getClass();
        $controller_class = new $class;
        return call_user_func(array($controller_class, $route->getAccion()),$request);
        
    }



}



