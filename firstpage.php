<?php 
session_unset();
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard App</title>
	<?php include("includes/head.php"); ?>
</head>
<body>

	<?php
	if (isset($_POST['Continue'])) { 
		$_SESSION['preset'] = $_POST['independence'];
	}
	?> 

	<p>Please select a preset based on your ward. Alternatively, manually create a layout.</p>

	<form action="secondpage.php" method="post">
		<input type="radio" value="Independent" name="independence">Independent
		<br>
		<input type="radio" value="Semi-Independent" name="independence">Semi-Independent
		<br>
		<input type="radio" value="Requires Assistance" name="independence">Requires Assistance
		<br>
		<input type="radio" value="Custom" name="independence">Custom
		<br>
		<input type="submit" name="Continue">
	</form>
	
</body>
</html>