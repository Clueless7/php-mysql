<?php

$servername = "localhost";
$username = "josel";
$password = "paxxword";
$dbname = "dbform";
$tableName = "tableform";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die ("Connection failed: " . mysqli_connect_error());
}

?>