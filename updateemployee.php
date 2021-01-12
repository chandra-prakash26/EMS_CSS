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
$mobileNo = filter_input(INPUT_POST, 'mobileno');
$checkEmpId="SELECT empid FROM employee WHERE empid='$empId'";
$runSql_1=$conn->query($checkEmpId);
if($runSql_1->num_rows !=0){
    $sql = "UPDATE employee SET mobileno='$mobileNo' WHERE empid='$empId'";
    $rs=mysqli_query($conn,$sql);
    if ($rs) {
      echo "<h1>Record updated successfully</h1>";
    } else {
      echo "Error updating record: " . $conn->error;
    }
}else{
    echo "<h2>Employee doesn't exists</h2>";
}
$conn->close();
?>