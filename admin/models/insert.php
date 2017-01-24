<?php
	session_start();
	require_once('../../includes/db.php');

	if ($_SESSION['db'] == 1) {
		$name = $_POST['name'];
		$des = $_POST['des'];

				$sql = "INSERT INTO locations (location_name, location_description) VALUES ('$name', '$des')";
				$result = $mysqli->query($sql);

				header('location: ../admin.php');
	}

	if ($_SESSION['db'] == 2) {
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

		$sql = "INSERT INTO organisations (organisation_name, organisation_description, organisation_categorie, organisation_information, organisation_adress, organisation_zipcode, organisation_city, organisation_phonenumber, organisation_email, organisation_website) VALUES ('$name', '$des', '$categorie', '$information', '$adress', '$zipcode', '$city', '$phonenumber', '$email', '$website')";
				$result = $mysqli->query($sql);

				header('location: ../admin.php');

	}

	if ($_SESSION['db'] == 3) {
		$name = $_POST['name'];
		$des = $_POST['des'];
		$date = $_POST['date'];
		$time = $_POST['time'];

		$sql = "INSERT INTO events (event_name, event_description, event_date, event_time)VALUES ('$name', '$des', '$date', '$time')";
				$result = $mysqli->query($sql);

				header('location: ../admin.php');
	}

	if ($_SESSION['db'] == 4) {
		$name = $_POST['name'];
		$rights = $_POST['rights'];
		$password = $_POST['password'];

		$sql = "INSERT INTO users (user_name, user_rights, user_password) VALUES ('$name', '$rights', '$password')";
		$result = $mysqli->query($sql);

		header('location: ../admin.php');
	}

?>