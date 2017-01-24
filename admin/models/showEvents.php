<?php
	require_once('../includes/db.php');

	$sql = 'SELECT * FROM events';
	$result = $mysqli->query($sql);

	echo "Select a school to edit.<br><br>";

	echo "<table>
	<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Description</th>
	<th>Date</th>
	<th>Time</th>
	<th>Options</th>
	</tr>";
	while($row = $result->fetch_assoc()){
		echo "<tr>";
    echo "<td>" . $row['event_id'] . "</td>";
    echo "<td>" . $row['event_name'] . "</td>";
    echo "<td>" . $row['event_description'] . "</td>";
    echo "<td>" . $row['event_date'] . "</td>";
    echo "<td>" . $row['event_time'] . "</td>";
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
	Date:<br><input type="date" name="date"/><br>
	Time:<br><input type="time" name="time"/><br>
	<input type="submit" value="Edit"/>
	</form>
<h1>Update</h1>
<form action="models/update.php" method="POST">
	Id you want to change:<br><input type="text" name="id"><br>
	name:<br><input type="text" name="name"/><br>
	Description:<br><input type="text" name="des"/><br>
	Date:<br><input type="date" name="date"/><br>
	Time:<br><input type="time" name="time"/><br>
	<input type="submit" value="Edit"/>
	</form>
