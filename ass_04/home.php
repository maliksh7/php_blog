<!DOCTYPE html>
<html>
<head>
	<title> Home </title>
</head>
<body>
	<?php session_start() ?>

	<?php 

		if (isset($_SESSION['username'])) {
			echo "<h1> Hello there {$_SESSION['username']} </h1>";
		} else {
			echo "You have no Access to this site";
		}

	 ?>
</body>
</html>