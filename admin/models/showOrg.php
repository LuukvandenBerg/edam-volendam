<?php
	require_once('../includes/db.php');

	$sql = 'SELECT * FROM organisations';
	$result = $mysqli->query($sql);

	echo "Select a school to edit.<br><br>";

	echo "<table>
	<tr>
	<th>id</th>
	<th>Name</th>
	<th>Description</th>
	<th>Categorie</th>
	<th>Information</th>
	<th>Adress</th>
	<th>Zipcode</th>
	<th>City</th>
	<th>Phonenumber</th>
	<th>Email</th>
	<th>Website</th>
	<th>Options</th>
	</tr>";
	while($row = $result->fetch_assoc()){
		echo "<tr>";
    echo "<td>" . $row['organisation_id'] . "</td>";
    echo "<td>" . $row['organisation_name'] . "</td>";
    echo "<td>" . $row['organisation_description'] . "</td>";
    echo "<td>" . $row['organisation_categorie'] . "</td>";
    echo "<td>" . $row['organisation_information'] . "</td>";
    echo "<td>" . $row['organisation_adress'] . "</td>";
    echo "<td>" . $row['organisation_zipcode'] . "</td>";
    echo "<td>" . $row['organisation_city'] . "</td>";
    echo "<td>" . $row['organisation_phonenumber'] . "</td>";
    echo "<td>" . $row['organisation_email'] . "</td>";
    echo "<td>" . $row['organisation_website'] . "</td>";
    echo "<td><a href='models/delete.php?id=".$row['location_id']."'>DELETE</a> <a href='views/edit.php?id=".$row['location_id']."'>EDIT</a>"; 
    echo "</tr>";
	}
	echo "</table>";

	echo "<a href='views/add.php'>ADD</a><br><br>";

?>
<h1>Add</h1>
<form method="post" action="models/insert.php">
Name:<br><input type="text" name="name"><br>
Description:<br><input type="text" name="des"><br>
Categorie:<br><input type="text" name="categorie"><br>
Information:<br><input type="text" name="information"><br>
Adress:<br><input type="text" name="adress"><br>
Zipcode:<br><input type="text" name="zipcode"><br>
City:<br><input type="text" name="city"><br>
Phonenumber:<br><input type="text" name="phonenumber"><br>
Email:<br><input type="text" name="email"><br>
Website:<br><input type="text" name="website"><br>
<input type="submit" value="Add">
</form>
<h1>Update</h1>
<form method="post" action="models/update.php">
Id you want to change:<br><input type="text" name="id"><br>
Name:<br><input type="text" name="name"><br>
Description:<br><input type="text" name="des"><br>
Categorie:<br><input type="text" name="categorie"><br>
Information:<br><input type="text" name="information"><br>
Adress:<br><input type="text" name="adress"><br>
Zipcode:<br><input type="text" name="zipcode"><br>
City:<br><input type="text" name="city"><br>
Phonenumber:<br><input type="text" name="phonenumber"><br>
Email:<br><input type="text" name="email"><br>
Website:<br><input type="text" name="website"><br>
<input type="submit" value="Edit">
</form>
