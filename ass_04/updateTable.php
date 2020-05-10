<!DOCTYPE html>
<html>
<head>
	<title>Update Table</title>
</head>
<body>
	<?php 
	session_start();
	if(isset($_SESSION["username"])){ ?>
	<h1>Welcome...!</h1>
	<h2>Update Table</h2>

	<form action="" method="POST">
		<fieldset>
			<h3>Add Column :</h3>
			<b>

			 
			<input type="text" name="cName" placeholder="Column Name"> <br><br>
			<input type="text" name="cType" placeholder="Column Type"> <br><br>
			<input type="submit" name="SUBMIT!">
			</b>
	
		</fieldset>
	</form>

	<br><br>

	<form action="" method="POST">
		<fieldset>
			<h3>Delete Column :</h3>
			<b>

			 
			<input type="text" name="Cname" placeholder="Column Name"> <br><br>
			
			<input type="submit" name="submit">
			<input type="submit" name="Logout">
			</b>
	
		</fieldset>
	</form>

	<br><br>

	<fieldset>	
		<b><u><h2>Action Block:</h2></u></b>
		<?php 

			if (isset($_POST['SUBMIT!'])) {

				include 'connect.php'; 

				$cName = $_POST['cName'];
				$cType = $_POST['cType'];

				$qry = "ALTER TABLE data ADD $cName $cType"; 

				echo $qry;

				echo "<br>column ADDED!";

			}

		 ?>

		 <?php 
		 	echo "<br><br><br>";
			if (isset($_POST['submit'])) {
	
				include 'connect.php'; 

				$Cname = $_POST['Cname'];
				

				$qry = "ALTER table data drop column $Cname"; 

				echo $qry;

				echo "<br>column DELETED!";

			}

		  ?>



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
	<?php } else { ?>

		<h1>User Not Found...! </h1>
<?php } ?>

</body>
</html>