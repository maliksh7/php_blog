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
			<input type="password" name="pass"> 
			<input type="submit" name="submit">
		</fieldset>
	</form>
	<br><br>
	<h2>
		Register if not logged in
	</h2>
	<form action="register.php" method="POST">
		<fieldset>
			<legend>
				Register:
			</legend>
			<label>Username: </label>
			<input type="text" name="username"> <br><br>
			<label>Password: </label>
			<input type="password" name="pass"> 
			<input type="submit" name="submit">			
		</fieldset>
	</form>


</body>
</html>