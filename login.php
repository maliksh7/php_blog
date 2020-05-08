<?php 

	/**
	 * File to handle all login attempts
	 */
	session_start();
	include 'connect.php';


	// Getting data $_POST
	// print_r($_POST);
	$username = $_POST['username'];
	$pass     = $_POST['password'];

	// echo $username.' '.$pass;

	$qry = "select * from user";
	
	$res = $connect->query($qry);	// $res is an associative array, shayad

	if($res->num_rows > 0) {
		// print_r($res);
		// if there are some rows in result
		// then move forward to login. 

		while($row = $res->fetch_assoc()) {
			// print_r($row);

			// saad ny ye checks ek line mein krny hain.
			if($row['name'] == $username) {
				echo "User found";
				if($row['password'] == $pass) {
					echo "<br>Password also matches";
					// redirect to home page. 
					$_SESSION['username'] = $username;
					header("location:home.php");
				} else {
					echo "<br>Password does not match";
				}
			}
		}
		echo "<h1>LOGIN FAILED !!!";

	} else {
		// if there are no rows in our result
		// then we cannot login.
		echo "Query not ran succesfully<br>Login Unsecsesful?";
	}

 ?>