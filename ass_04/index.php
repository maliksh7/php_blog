<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>
		Welcome
	</h1>
	<h2>
		Login to continue
	</h2>

	<form action="login.php" method="POST">
		<fieldset>
			<legend>
				Login:
			</legend> 
			<label>Username: </label>
			<input type="text" name="username"> <br><br>
			<label>Password: </label>
			<input type="password" name="pass"> <br><br>
			<input type="submit" name="submit"> <br><br>
	
		</fieldset>
	</form>

</body>
</html>