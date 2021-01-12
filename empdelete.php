
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
$empId = filter_input(INPUT_POST, 'empid');
$checkEmpId="SELECT empid FROM employee WHERE empid='$empId'";
$runSql_1=$conn->query($checkEmpId);

if($runSql_1->num_rows !=0){
  // sql to delete a record
$sql = "DELETE FROM employee WHERE empid='$empId'";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Record deleted successfully</h1>";
} else {
  echo "Error deleting record: " . $conn->error;
}
}else {
  echo "<h1>Error in deleting record</h1>";
}
$conn->close();
?>