<?php
     class db{

	 //Properties
	 private $dbhost = "localhost";
	 private $dbuser = "ravir";
	 private $dbpass = "181229";
	 private $dbname = "slimblog";
		 
		 
		 //Connection to DB
		 public function connect(){
			 
			 $mysql_conn_string = "mysql:host=$this->dbhost;dbname=$this->dbname";
			 $dbConnection = new PDO($mysql_conn_string, $this->dbuser, $this->dbpass);
			 $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
			  return $dbConnection;
		 }
		 
		 
	 }