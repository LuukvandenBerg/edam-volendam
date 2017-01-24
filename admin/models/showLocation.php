<?php
	require_once('../includes/db.php');

	$sql = 'SELECT * FROM locations';
	$result = $mysqli->query($sql);

	echo "Select a school to edit.<br><br>";

	echo "<table>
	<tr>
	<th>id</th>
	<th>City</th>
	<th>Description</th>
	<th>Options</th>
	</tr>";
	while($row = $result->fetch_assoc()){
		echo "<tr>";
    echo "<td>" . $row['location_id'] . "</td>";
    echo "<td>" . $row['location_name'] . "</td>";
    echo "<td>" . $row['location_description'] . "</td>";
    echo "<td><a href='models/delete.php?id=".$row['location_id']."'>DELETE</a>"; 
    echo "</tr>";
	}
	echo "</table>";

	echo "<a href='views/add.php'>ADD</a><br><br>";
	?>
	<h1>Add</h1>
	<form action="models/insert.php" method="POST">
	name:<br><input type="text" name="name"/><br>
	Description:<br><input type="text" name="des"/><br>
	<input type="submit" value="Add"/>
	</form>
	<h1>Update</h1>
	<form action="models/update.php" method="POST">
	Id you want to change:<br><input type="text" name="id"><br>
	name:<br><input type="text" name="name"/><br>
	Description:<br><input type="text" name="des"/><br>
	<input type="submit" value="Edit"/>
	</form>
