<?php
	
	class dbConfig {

		public $mysql_host;
		public $mysql_user;
		public $mysql_pass;
		public $dbName;
		public $dbTable;

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

		public function getDbParams() {

			return array($this->mysql_host, $this->mysql_user, $this->mysql_pass, $this->dbName, $this->dbTable);

		}

	}

?>
