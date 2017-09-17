<?php
	require_once("config.php");

	class conexion
	{	
		protected $_db;

		public function __construct()
		{
			
		}

		public function Conectar()
		{
			$this->_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

			if($this->_db->connect_errno)
			{
				echo "Fallo al conectar la bd";
				return;
			}

			return $this->_db;
		}
	}