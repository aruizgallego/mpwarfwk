<?php

namespace Mpwarfwk;

class Response{

 	protected $content;
 	protected $status;
 

	public function __construct($content, $status = 200){
		$this->content = $content;
		$this->status = $status;
	}

	public function send(){

		if($this->status != 200){
			header("HTTP/1.0 404 not Found");
		}
		echo $this->content;
	}

}