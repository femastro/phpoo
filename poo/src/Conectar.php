<?php
	abstract class Conectar {

	   	protected $personasId;
    	protected $personasName;
    	protected $personasEdad;
    	protected $personasDni;
    	protected $personasUsu;
    	protected $personasPass;

		protected $connection;

		public function __construct() {
			$this->connect();
		}

		public function connect() {

			$server = "localhost";
			$dbname = "personas";
			$userdb = "root";
			$passdb = "";
			$conn = Null;

			try {

				$conn = new \PDO('mysql:host='.$server.';dbname='.$dbname.'', ''.$userdb.'', ''.$passdb.'');

				$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

			} catch (\PDOException $e) {

				echo "CONECTION ERROR !!..... ";
				die($e->getMessage());

			}
			
			$this->connection = $conn;
		}

		public function __set($prop, $value) {
			$this->{$prop} = $value;
		}

		public function __get($prop) {
			return $this->{$prop};
		}

	}
?>
