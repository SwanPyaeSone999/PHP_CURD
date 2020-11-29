<?php 

		define('DB_HOST', 'localhost:3307');
		define('DB_USERNAME', 'root');
		define('DB_PASS', '');
		define('DB_NAME', 'php_curd');

		$con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASS,DB_NAME) or die("Connection Fail");

		


 ?>