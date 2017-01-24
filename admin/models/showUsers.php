<?php
	require_once('../includes/db.php');

	$sql = 'SELECT * FROM users';
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
    echo "<td>" . $row['user_id'] . "</td>";
    echo "<td>" . $row['user_name'] . "</td>";
    echo "<td>" . $row['user_rights'] . "</td>";
    echo "<td><a href='models/delete.php?id=".$row['location_id']."'>DELETE</a>"; 
    echo "</tr>";
	}
	echo "</table>";

	echo "<a href='views/add.php'>ADD</a><br><br>";

?>
<h1>Add</h1><br>
<form action="models/insert.php" method="POST">
	name:<br><input type="text" name="name"/><br>
	Rights:<br><input type="text" name="rights"/><br>
	Password:<br><input type="password" name="password"><br>
	<input type="submit" value="Add"/>
	</form><br>
<h1>Update</h1><br>
<form action="models/update.php" method="POST">
	Id you want to change:<br><input type="text" name="id"><br>
	name:<br><input type="text" name="name"/><br>
	Rights:<br><input type="text" name="rights"/><br>
	<input type="submit" value="Edit"/>
	</form>
