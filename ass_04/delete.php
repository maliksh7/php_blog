<!DOCTYPE html>
<html>
<head>
	<title>Delete Page</title>
</head>
<body>
	<?php 
	session_start();
	if(isset($_SESSION["username"])){ ?>
	<h1>Delete Page</h1>
	<h3>Choose What to delete</h3><br><br>
	<form method="POST">
		
		<fieldset>
			<label>Enter Record(Name) to Delete: </label>
			<input type="text" name="todelete"> <br><br>

			<label>Delete all the Records? </label>
			<input type="checkbox" name="deleteall"><br><br>



			<input type="submit" name="UPDATE!" value="DELETE">
		</fieldset>

	</form>	<br><br>

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

	<?php 

		if(isset($_POST['todelete'])){

			include 'connect.php';

			$todelete = $_POST['todelete'];
			
			$qry = "DELETE FROM data WHERE username='$todelete'";
			

			if($conn->query($qry)) {
				echo "<br>Specfic Records Deleted!!!";
			} else {
				echo "<br>Failed to delete specfic records!!!";
			}
		} elseif (isset($_POST['deleteall'])) {

			include 'connect.php';

			$deleteall= $_POST['deleteall'];

			$qry1= "DELETE FROM data";

			if($conn->query($qry)) {
				echo "<br>All Records Deleted!!!";
			} else {
				echo "<br>Failed to delete all records!!!";
			}

		}

	?>	

	<?php } else { ?>

		<h1>User Not Found...! </h1>
<?php } ?>
</body>
</html>