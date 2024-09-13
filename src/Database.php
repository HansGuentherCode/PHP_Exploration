<?php

class Database
{
	public $connection;
	
	public function __construct($DSN, $username) 
	{
		$this->connection = new PDO($this->$DSN, $username);
	}
	
	
	public function query($query)
	{
	$statement = $this->connection->prepare($query);
	$statement->execute();

	return ($statement);
	}
}
