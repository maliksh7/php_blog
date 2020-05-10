<!DOCTYPE html>
<html>
<head>
	<title> Update </title>
</head>
<body>
	<?php 
	session_start();
	if(isset($_SESSION["username"])){ ?>
	<h2>Welcome!</h2>
	<h3>Update your records here...</h3>

	<form action="" method="POST">
		
		<fieldset>
		
		<label>Enter Name to Update : </label>
		<input type="text" name="toupdate" placeholder="Name">

		<h2> What to update </h2>

		 
		<label>Username : </label>
		<input type="text" name="username" placeholder="New Username"> <br><br>


		<label>Password : </label>
		<input type="text" name="pass" placeholder="New Password"> <br><br>

		
		<label>City : </label>
		<input type="text" name="city" list="city" placeholder="New City">
			<datalist id="city">
				<option value="Peshawar">
				<option value="Islamabad">
				<option value="Lahore">
				<option value="Karachi">
			</datalist> <br><br>

	
		<label>Department : </label>
		<input type="text" name="field" list="field" placeholder="New Department">
			<datalist id="field">
				<option value="Computer Science">
				<option value="Software Engineering">
				<option value="Electrical Engineering">
			</datalist> <br><br>

		<input type="submit" name="UPDATE!" value="UPDATE">
	</form>

	</fieldset> <br><br>
	<form action="" method="POST">
		<fieldset>
			<b>Want to Log Out ?</b><br><br> 

			<input type="submit" name="logout" value="Logout">
			<?php 

				if (isset($_POST['logout'])) {
					session_destroy();
				}

			 ?>
		</fieldset>
	</form>
	<br><br><br>
	<fieldset>

	<?php if(isset($_POST['toupdate'])){

		include 'connect.php';

		$toUpdate = $_POST['toupdate'];

		$user = $_POST['username'];
		$pass = $_POST['pass'];
		$city = $_POST['city'];
		$field= $_POST['field'];


		$qry = "";

		if($user != "" && $pass != "" && $city != "" && $field != "") {
			$qry = "update data set username='$user', password='$pass', city='$city', field='$field' where username='$toUpdate'";
			echo $qry;
		} elseif ($user != "" && $pass != "" && $city != "") {
			$qry = "update data set username='$user', password='$pass', city='$city' where username='$toUpdate'";
			echo $qry;
		} elseif ($user != "" && $pass != "") {
			$qry = "update data set username='$user', password='$pass' where username='$toUpdate'";
			echo $qry;
		} elseif ($user != "") {
			$qry = "update data set username='$user' where username='$toUpdate'";
			echo $qry;
		} elseif ($pass != "") {
			$qry = "update data set password='$pass' where username='$toUpdate'";
			echo $qry;
		} elseif ($city != "") {
			$qry = "update data set city='$city' where username='$toUpdate'";
			echo $qry;
		} elseif ($field != "") {
			$qry = "update data set field='$field' where username='$toUpdate'";
			echo $qry;
		} else {
			echo "Nothing";	
		}

		if($conn->query($qry)) {
			echo "<br>[* ] - Data Updated";
		} else {
			echo "<br>[* ] - Failed to Update data";
		}

	 }?>

	 </fieldset>
	 <?php } else { ?>

		<h1>User Not Found...! </h1>
<?php } ?>

</body>
</html>