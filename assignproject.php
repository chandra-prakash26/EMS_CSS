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
$projId = filter_input(INPUT_POST, 'projid');
$checkEmpId="SELECT empid FROM employee WHERE empid='$empId'";
$checkProjId="SELECT projid FROM project WHERE projid='$projId'";

$runSql_1=$conn->query($checkEmpId);
$runSql_2=$conn->query($checkProjId);

if($runSql_1->num_rows !=0 && $runSql_1->num_rows !=0){
    $sql = "INSERT INTO emp_proj (empid, projid)
    VALUES ('$empId','$projId')";
    if ($conn->query($sql) === TRUE) {
        echo "<h1>Assigned successfully<h1>";
      } else {
        echo "Either Employee or Project does not exist: " . $conn->error;
      }
}else{
    echo "<h1>Either Employee or Project does not exist</h1>";
}
$conn->close();
?>