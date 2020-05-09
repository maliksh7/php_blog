<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<style type="text/css">
		a {
			font-size: x-large;
		}
	</style>
</head>
<body style="background-color: gray;">

	<?php 
	session_start();
	if(isset($_SESSION["username"])){ ?>
	<h1>Main Page</h1>
	<h2>WELLCOME</h2>
	<form style="font-size: x-large;" action="next.php" method="POST" target="blank">
		<fieldset>
			<legend>
				Form: 
			</legend>
			<label>Username: </label>
			<input type="text" name="user" placeholder="Username"><br><br>

			<label>Password: </label>
			<input type="password" name="password" placeholder="Password"><br><br>

			<label>Select City: </label>
			<input type="text" name="browsers" list="browsers" placeholder="City">
			<datalist id="browsers">
				<option value="Peshawar">
				<option value="Islamabad">
				<option value="Lahore">
				<option value="Karachi">
			</datalist> <br><br>

			<label>Department: </label><br>
			<input type="radio" name="field" value="CS">  Computer Science <br>
			<input type="radio" name="field" value="EE">  Electrical Engineering <br>
			<input type="radio" name="field" value="SE">  Software Engineering <br><br>

			<label>Want Updates.?</label><br>
			<input type="checkbox" name="chkbox">  Yes <br><br>

			<input type="submit" name="submit">

		</fieldset>
	</form> <br><br>

	<h3>Links: </h3> 
	<b>
		1)  <a href="update.php" >Update</a><br><br>
		2)  <a href="delete.php">Delete</a><br><br>
		3)  <a href="updateTable.php">Update Table</a>
	</b>
	<?php } else { ?>
<<<<<<< HEAD
		<h1>Login Karo Bhai </h1>
	<?php } ?>
=======
		<h1>User Not Found...! </h1>
<?php } ?>
>>>>>>> 00066c9911dba06783ddddc4efb9ff5cec109a6e
</body>
</html>