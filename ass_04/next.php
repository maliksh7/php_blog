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

	<fieldset>
			<legend>
				Select: 
			</legend>
			
			<form action="addTODB.php" method="POST">
				<input type="hidden" name="user" value="<?php echo $user ?>">
				<input type="hidden" name="pass" value="<?php echo $pass ?>">
				<input type="hidden" name="city" value="<?php echo $city ?>">
				<input type="hidden" name="field" value="<?php echo $field ?>">
				<input type="hidden" name="info" value="<?php echo $info ?>">
				1) <button type="submit">Approve</button><br><br>
			</form>

			<form action="main.php">
				2) <button type="submit">Cancel</button>
			</form>

		</fieldset>
	

</body>
</html>