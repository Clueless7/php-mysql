<?php

require('dbcon.php');

$result = mysqli_query($conn,"SELECT * FROM $tableName");

echo "<table class='table table-striped table-hover'>";
echo "<thead>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Age</th>";
echo "</tr>";
echo "</thead>";
while ($row = mysqli_fetch_array($result)) {
  echo "<tr><td>" . $row['id'] . "<td>" . $row['firstname'] . "<td>" . $row['lastname'] . "<td>" . $row['age'] . "</tr>";
}
echo "</table>";

mysqli_close($conn);

?>