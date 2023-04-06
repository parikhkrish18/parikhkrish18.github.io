<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h2>Login</h2>
	<form method="post">
		<label>Username:</label><br>
		<input type="text" name="username" required><br>
		<label>Password:</label><br>
		<input type="password" name="password" required><br><br>
		<input type="submit" name="submit" value="Login">
	</form>

	<?php
		// Check if form has been submitted
		if(isset($_POST['submit'])) {
			// Check if username and password are correct
			if($_POST['username'] == 'hello' && $_POST['password'] == 'pass123') {
				// Redirect to dashboard page or display success message
				echo "Login successful!";
			} else {
				// Display error message
				echo "Invalid username or password";
			}
		}
	?>
</body>
</html>