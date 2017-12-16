<?php 

class coneccionBD {

	private $_connection;
	private static $_instance; //The single instance
	private $_host = "172.20.4.11";
    private $_username = "Pide_MML";
	private $_password = "juh%2qer7";
	private $_database = "Pide_MML";

	public function __construct() {

		$this->_connection=new PDO("mysql:host=$this->_host;dbname=$this->_database;charset=utf8","$this->_username","$this->_password");

	}
	public static function getInstance() {
		if (!self::$_instance) {
			// If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function conectar() {
		return $this->_connection;
	}

	public function close(){
		mysqli_close();
	}


}