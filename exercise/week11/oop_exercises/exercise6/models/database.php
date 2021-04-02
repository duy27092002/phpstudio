<?php
	abstract class Database {
		public $connection;
		public $connectionActive;

		abstract public function setConnection($dbName);
		abstract public function getConnection();
	}

	class DBConnection extends Database
	{
		function __construct($connection, $connectionActive)
		{
			$this->connection = $connection;
			$this->connectionActive = $connectionActive;
		}

		public function setConnection($dbName)
		{
			$this->connectionActive = true;
		}
		public function getConnection()
		{
			if ($this->connectionActive == true) {
				echo "{$this->connection}";
			} else {
				echo "";
			}
		}
	}
?>