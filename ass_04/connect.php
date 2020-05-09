<?php 

	/**
	* Php file to handle connection to database.
	*/

	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ass_04";

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		echo "<h1> Cannot Connect </h1></br>";
	} else {
		echo "<h1>  Connected </h1></br>";
	}
	// endoffile


 ?>