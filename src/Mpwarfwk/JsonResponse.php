<?php

namespace Mpwarfwk;
use Mpwarfwk\Response;

class JsonResponse extends Response{

	public function send(){

		if(status != 200)
			header("HTTP/1.0 404 not Found");
		}

		header('conten-type: application/json')

		if(!is_array(content)){
			this content = array(content);
		}
		echo json_encode($this->content);
	}

}