<?php
	session_start();
	$_SESSION['id'] = $_GET['id'];
?>

<form action="../models/update.php" method="POST">
	name:<br><input type="text" name="name"/><br>
	Description:<br><input type="text" name="des"/><br>
	<input type="submit" value="Edit"/>
</form>