<?php
	session_start();
	require_once('../../includes/db.php');
	$id = $_GET['id'];

	if ($_SESSION['db'] == 1) {
		$db = "locations";
		$id = "location_id";
	}

	if ($_SESSION['db'] == 2) {
		$db = "organisations";
		$id = "organisation_id";
	}

	if ($_SESSION['db'] == 3) {
		$db = "events";
		$id = "event_id";
	}

	if ($_SESSION['db'] == 4) {
		$db = "users";
		$id = "user_id";
	}

	$sql = "DELETE FROM $db WHERE $id = $id";
	$result = $mysqli->query($sql);

	header('location: ../admin.php');
?>