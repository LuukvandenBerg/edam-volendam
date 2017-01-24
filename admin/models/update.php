<?php
	session_start();
	require_once('../../includes/db.php');

	if ($_SESSION['db'] == 1) {
		
		$name = $_POST['name'];
		$des = $_POST['des']; 
		$id = $_POST['id'];

		$sql = "UPDATE locations SET location_name = '$name', location_description = '$des' WHERE location_id = '$id'";
		$result = $mysqli->query($sql);

		header('location: ../admin.php');
	}

	if ($_SESSION['db'] == 2) {
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$des = $_POST['des'];
		$categorie = $_POST['categorie'];
		$information = $_POST['information'];
		$adress = $_POST['adress'];
		$zipcode = $_POST['zipcode'];
		$city = $_POST['city'];
		$phonenumber = $_POST['phonenumber'];
		$email = $_POST['email'];
		$website = $_POST['website'];

		$sql = "UPDATE organisations SET organisation_name = '$name', organisation_description = '$des', organisation_categorie = '$categorie', organisation_information = '$information', 
			organisation_adress = '$adress', organisation_zipcode = '$zipcode', organisation_city = '$city', organisation_phonenumber = '$phonenumber', organisation_email = '$email', organisation_website = '$website' WHERE organisation_id = $id";
			$result = $mysqli->query($sql);

			header('location: ../admin.php');
	}

	if ($_SESSION['db'] == 3) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$des = $_POST['des'];
		$date = $_POST['date'];
		$time = $_POST['time'];

		$sql = "UPDATE events SET event_name = '$name', event_description = '$des', event_date = '$date', event_time = '$time' WHERE event_id = $id";
			$result = $mysqli->query($sql);

			header('location: ../admin.php');
	}

	if ($_SESSION['db'] == 4) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$rights = $_POST['rights'];

		$sql = "UPDATE users SET user_name = '$name', user_rights = '$rights' WHERE user_id = $id";
		$result = $mysqli->query($sql);

		header('location: ../admin.php');
		
	}
?>