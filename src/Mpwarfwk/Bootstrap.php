<?php

namespace Mpwarfwk;

class Bootstrap
{
 	public function __construct()
    {
    	echo 'Test';
    }

    public function execute()
    {
        $routing = new Routing();
        $controller_class = $routing->getRoute('home');

        $controller = new $controller_class();
        $controller->build;
    }



}
