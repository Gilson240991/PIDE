<?php 

class coneccionBD {

	private $_connection;
	private static $_instance; //The single instance
	private $_host = "172.20.4.11";
    private $_username = "Pide_MML";
	private $_password = "juh%2qer7";
	private $_database = "Pide_MML";

	public function __construct() {

		$this->_connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
		mysqli_set_charset($this->_connection, "utf8");

		// Error handling
		if (mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysqli_connect_error(), E_USER_ERROR);
		}

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