<?php

namespace Mpwarfwk\Database;

use \PDO;
use \PDO\Exception;

Class SQL extends PDO{

	private $con;
	private $stmt;
	private $host;
	private $port;
	private $dbname;
	private $user;
	private $password;

	public function __construct($host, $port, $dbname, $user, $password){

		$this->host = $host;
		$this->port = $port;
		$this->dbname = $dbname;
		$this->user = $user;
		$this->password = $password;
		$this->connect();
	}

	public function connect(){

		try{
			$dsn = 'mysql:host='.$this->host.';port:'.$this->port.';dname='.$this->dbname;
			$this->con = new PDO($dsn, $this->user, $this->password);
			$this->con->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);

		}
		catch(PDOException $e){

			print('Error: No puede conectarse a la base de datos');
			exit;

		}

	}

	public function query($query){
		$this->stmt = $this->con->prepare($query);
	}

	public function bind($param, $value){
		$this->stmt->bindParam($param, $value);
	}

	public function execute(){
		return $this->stmt->execute();
	}

	public function resultSet(){
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function single(){
		$this->stmt->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function insert(Array $keys, $table, Array $values){

		$keys = implode(',', $keys);
		$values = implode(',', $values);

		$query = "INSERT INTO ".$table." (".$keys.") VALUES (".$values.")";

		$this->stmt = $this->con->prepare($query);
		$this->stmt->execute();

	}

	public function update($table, $set, $where){

		$query = "UPDATE ".$table." SET ".$set." WHERE ".$where;

		$this->stmt = $this->con->prepare($query);
		$this->stmt->execute();
	}

	public function delete($table, $where){

		$query = "DELETE FROM ".$table." WHERE ".$where;

		$this->stmt = $this->con->prepare($query);
		$this->stmt->execute();
	}


}




