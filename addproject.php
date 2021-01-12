<?php

$servername = "localhost";
$username = "root";
$password = "8409270514@Cp";
$dbname = "testdb2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<a href='http://localhost/DB/mega.php#home'><h3>HOME</h3></a>";
$projectName = filter_input(INPUT_POST, 'projname');
$projectDesc = filter_input(INPUT_POST, 'projdesc');
$projectStartDate = filter_input(INPUT_POST, 'projstartdate');
$projectEndDate = filter_input(INPUT_POST, 'projenddate');

$sql = "INSERT INTO project (projname, projdesc, projstartdate, projenddate)
VALUES ('$projectName', '$projectDesc', '$projectStartDate', '$projectEndDate')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>New record created successfully</h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>