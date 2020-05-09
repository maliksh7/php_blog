<?php 
	
	include 'connect.php';

	$username = $_POST['username'];
	$pass     = $_POST['pass'];

	$qry = "insert into user(name, password) values ('$username','$pass')";
	echo $qry;	  

	if($conn->query($qry)){
		echo "Registered Successfully !!";
	} else {
		echo "Registration Failed !!!";
	}
 ?>