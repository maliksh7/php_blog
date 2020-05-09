<!DOCTYPE html>
<html>
<head>
	<title> Update </title>
</head>
<body>

	<form action="" method="POST">
		
		Enter Name to Update: <input type="text" name="toupdate">

		<h2> What to update </h2>

		Username : <input type="text" name="username" value="">
		Password : <input type="text" name="pass" value="">
		City     : <input type="text" name="city" value="">
		Field    : <input type="text" name="field" value="">

		<input type="submit" name="UPDATE!" value="UPDATE">
	</form>


	<?php if(isset($_POST['toupdate'])){

		include 'connect.php';

		echo "hey";

		$toUpdate = $_POST['toupdate'];

		$user = $_POST['username'];
		$pass = $_POST['pass'];
		$city = $_POST['city'];
		$field= $_POST['field'];

		// echo $toUpdate;
		// echo $user."<br>";
		// echo $pass."<br>";
		// echo $city."<br>";
		// echo $field."<br>";
		// echo $info."<br>";

		$qry = "";

		if($user != "" && $pass != "" && $city != "" && $field != "") {
			$qry = "update data set username='$user', password='$pass', city='$city', field='$field' where username='$toUpdate'";
			echo $qry;
		} elseif ($user != "" && $pass != "" && $city != "") {
			# code...
			$qry = "update data set username='$user', password='$pass', city='$city' where username='$toUpdate'";
			echo $qry;
		} elseif ($user != "" && $pass != "") {
			$qry = "update data set username='$user', password='$pass' where username='$toUpdate'";
			echo $qry;
		} elseif ($user != "") {
			# code...
			$qry = "update data set username='$user' where username='$toUpdate'";
			echo $qry;
		} elseif ($pass != "") {
			$qry = "update data set password='$pass' where username='$toUpdate'";
			echo $qry;
		} else {
			echo "Nothing";	
		}

		if($conn->query($qry)) {
			echo "Updated";
		} else {
			echo "Failed updating";
		}
	} ?>

</body>
</html>