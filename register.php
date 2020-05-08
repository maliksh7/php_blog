<?php 

	/**
	*	To register a new user by adding them to 
	*   Database.
	*/

	include 'connect.php';


	$username = $_POST['username'];
	$pass     = $_POST['password'];


	$qry = "insert into user(name, password) values ('$username','$pass')";

	// $qry = "insert into user(name, password) values ('".$username."','".$pass."')";
	// echo $qry;
 
	if($connect->query($qry)){
		echo "Registered Successfully !!";
	} else {
		echo "Registration Failed !!!";
	}
 ?>