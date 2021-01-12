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

// sql to create table
$sql = "CREATE TABLE emp_proj (
id INT AUTO_INCREMENT PRIMARY KEY,
empid int NOT NULL,
projid int NOT NULL,
FOREIGN KEY (empid) REFERENCES employee(empid),
FOREIGN KEY (projid) REFERENCES project(projid)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table project created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>