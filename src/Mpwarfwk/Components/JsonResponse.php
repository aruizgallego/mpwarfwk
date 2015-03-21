<?php

namespace Mpwarfwk\Components;
use Mpwarfwk\Components\Response;

class JsonResponse extends Response{

	public function send(){

		if($this->status != 200){
			header("HTTP/1.0 404 not Found");
		}

		header('conten-type: application/json');

		if(!is_array($this->content)){
			$this->content = array($this->content);
		}
		echo json_encode($this->content);
	}

}