<!DOCTYPE html>
<html>
<head>
	<title>On Submit</title>
</head>
	<!-- this page will be open once user submit form on main.php -->
<body>
	<h3>Welcome Once Again</h3>
	<?php 

	$user = $_POST['user'];
	$pass = $_POST['password'];
	$city = $_POST['browsers'];
	$field= $_POST['field'];
	$info = $_POST['chkbox'];

	echo $user."<br>";
	echo $pass."<br>";
	echo $city."<br>";
	echo $field."<br>";
	echo $info."<br>";

	 ?>
	 <br><br>

	<form action="" method="POST">
		<fieldset>
			<legend>
				Select: 
			</legend>
			1) <button>Approve</button><br><br>
			2) <button>Cancel</button>
		</fieldset>
	</form>

</body>
</html>