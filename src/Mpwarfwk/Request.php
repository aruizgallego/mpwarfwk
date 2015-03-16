<?php

namespace Mpwarfwk;

class Request{

 	public $get;
 	public $post;
 	public $server;
 	public $cookies;
 	public $session;

	public function __construct(Session $session){
		$this->get = new Parameters($_GET);
		$this->post = new Parameters($_POST);
		$this->server = new Parameters($_SERVER);
		$this->cookies = new Parameters($_COOKIE);
		$this->session = $session;

		$_GET = $_POST = $_COOKIE = $_SERVER = array();
	}

}