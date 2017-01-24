<!DOCTYPE html>
<html>
<head>
	<title>CMS</title>
	<link rel="StyleSheet" href="css/main.css">
</head>
<body>
	<div id="wrapper">
		<div id="nav">
			<a href="admin.php?action=locations"><div id="locations"><p>locations</p></div></a>
			<a href="admin.php?action=org"><div id="organisations"><p>Organisations</p></div></a>
			<a href="admin.php?action=events"><div id="events"><p>Events</p></div></a>
			<a href="admin.php?action=users"><div id="users"><p>Users</p></div></a>
		</div>
		<?php
		session_start();
$action = isset($_GET['action'])?$_GET['action']:'locations';

switch($action) {
	case 'locations':
		include("models/showLocation.php");
		$_SESSION['db'] = "1";
		break;

	case 'org':
		include("models/showOrg.php");
		$_SESSION['db'] = "2";
		break;

	case 'events':
		include("models/showEvents.php");
		$_SESSION['db'] = "3";
		break;

	case 'users':
		include("models/showUsers.php");
		$_SESSION['db'] = "4";
		break;
}
?>
	</div>
</body>
</html>