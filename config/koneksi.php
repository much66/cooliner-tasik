<?php 

	class koneksi {

		public $hostname = "localhost";
		public $username = "root";
		public $password = "";
		public $database = "kuliner";

		public $con;

		public function __construct()
			{
				$this->con = mysqli_connect($this->hostname, $this->username, $this->password, $this->database) or die("Connection corrupt");
			}	
	}


 ?>