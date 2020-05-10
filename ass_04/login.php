
<?php

	session_start();
	include 'connect.php';
	
	print_r($_POST);
	$username = $_POST['username'];
	$pass     = $_POST['pass'];

	$sql = "SELECT * FROM USER";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		print_r($result);
		while ($row = $result->fetch_assoc()) {
			if (($row['name'] == $username) && ($row['pass'] == $password)) {
				echo "<br>User & Password matches..!";
				$_SESSION['username'] = $username;
				header("location:main.php");
			} else {
				echo "<br>Password does not match";
			}
		}
		echo "<h2>LOGIN FAILED !!!</h2>";
	} else {
		echo "Query not ran succesfully<br>Login Unsecsesful?";
	}




  ?>
