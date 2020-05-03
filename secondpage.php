<?php 
session_start();

$_SESSION["preset"] = $_POST["independence"];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Second Page test</title>
	<?php include("includes/head.php"); ?>
</head>
<body>

	<?php
	if ($_SESSION["preset"] == "Custom") {
		include("includes/custom.php");
	} else {
		include("includes/presetLayouts.php");
	}
	?>

</body>
</html>