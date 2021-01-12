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
// sql to create table
$sql = "CREATE TABLE project (
projid INT AUTO_INCREMENT PRIMARY KEY,
projname VARCHAR(30) NOT NULL,
projdesc VARCHAR(200) NOT NULL,
projstartdate date NOT NULL,
projenddate date NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table project created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>