<?php

namespace Mpwarfwk\SQL;
//namespace Mpwar\COmponentes\Database

//use \PDO;
//use PDO\Exception;

Class SQL{

	private $db;

	public function __construct(){

		$this->db = new PDO("mysql:host=127.0.0.1;port=8889;dbname=mydb", "root", "");
		//$this->connecion = new PDO("mysql:host=127.0.0.1;port=8889; dbname=mydb", "root", "password");

	}

	public function connect(){

		
	}

	public function executeQuery(){

		
	}

	public function insert(){

		
	}

	public function select(){

		
	}

	public function update(){

		
	}

	public function delete(){

		
	}


}




