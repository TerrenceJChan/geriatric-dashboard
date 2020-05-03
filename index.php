<!DOCTYPE html>
<html>
<head>
	<title>Dashboard App</title>
	<?php include("includes/head.php"); ?>
</head>

<body>
	<h1 style="text-align: center;">Geriatric Dashboard</h1>
	<div class="container">
		<div class="row">
			<div class="col">
				<h2>Caregiver Register</h2>
				<form action="firstpage.php">
					<label class="userpass" for="reg-username">Username:</label>
					<input type="text" name="reg-username">
					<br>
					<label class="userpass" for="reg-password">Password:</label>
					<input type="text" name="reg-password">
					<br>
					<input type="submit" name="register" value="Register">
				</form>
			</div>
			<div class="col">
				<h2>Senior Sign In</h2>
				<form action="firstpage.php">
					<label class="userpass" for="signin-username">Username:</label>
					<input type="text" name="signin-username">
					<br>
					<label class="userpass" for="signin-password">Password:</label>
					<input type="text" name="signin-password">
					<br>
					<input type="submit" name="register" value="Sign In">
				</form>
			</div>
		</div>
	</div>
	
</body>