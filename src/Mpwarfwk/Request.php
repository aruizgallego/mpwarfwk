<?php

namespace Mpwarfwk;

class Request{

	const HEADER_CLIENT_IP = 'client_ip';
    const HEADER_CLIENT_HOST = 'client_host';
    const HEADER_CLIENT_PROTO = 'client_proto';
    const HEADER_CLIENT_PORT = 'client_port';

    const METHOD_HEAD = 'HEAD';
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';


 	public $server;
 	public $files;
 	public $cookies;
 	public $session;

	public function __construct(){

	}

}