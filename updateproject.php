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
$projectId = filter_input(INPUT_POST, 'projid');
$projectName = filter_input(INPUT_POST, 'projname');
$checkProjectId="SELECT projid FROM project WHERE projid='$projectId'";
$runSql_1=$conn->query($checkProjectId);

if($runSql_1->num_rows !=0){
  $sql = "UPDATE project SET projname='$projectName' WHERE projid='$projectId'";
  $rs=mysqli_query($conn,$sql);
  if ($rs) {
    echo "<h1>Record updated successfully</h1>";
  } else {
    echo "Error updating record: " . $conn->error;
  }
} else{
  echo "<h1>Can't Assign Project</h1>";
}
$conn->close();
?>