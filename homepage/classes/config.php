<?php
	
	class dbConfig {

		public static $mysql_host;
		public static $mysql_user;
		public static $mysql_pass;
		public static $dbName;
		public static $dbTable;

		public function __construct() {

			$this->load();

		}

		private function load() {

			$config = parse_ini_file("config.ini");
			$this->mysql_host = $config["mysql_host"];
			$this->mysql_user = $config["mysql_user"];
			$this->mysql_pass = $config["mysql_pass"];
			$this->dbName = $config["dbName"];
			$this->dbTable = $config["dbTable"];

		}

	}

?>
