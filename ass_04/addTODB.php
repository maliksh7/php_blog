<?php 
	
	include 'connect.php';

	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$city = $_POST['city'];
	$field= $_POST['field'];
	$info = $_POST['info'];

	// echo $user."<br>";
	// echo $pass."<br>";
	// echo $city."<br>";
	// echo $field."<br>";
	// echo $info."<br>";

	$sql = "insert into data(username, password, city, field, info) values ('$user','$pass','$city','$field','$info')";


	if(!$conn->query($sql)) {
		echo "Data not inserted";;
	} else {
		echo "Data inserted...!";
	}






 ?>