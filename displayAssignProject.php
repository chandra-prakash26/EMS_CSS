<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
table{
  border-collapse: collapse;
  width: 100%;
  margin-bottom: -20px;
}

td, th {
  border: 1px solid #ccc;
  padding: 8px;
}

tr:nth-child(even){
  background-color: #ddd;
}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: orangered;
  color: white;
}
</style>
</head>
<body>

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
$empId= filter_input(INPUT_POST, 'empid');
$checkEmpId="SELECT empid FROM employee WHERE empid='$empId'";
$runSql_1=$conn->query($checkEmpId);


if($runSql_1->num_rows !=0){
$sql = "SELECT employee.empid,employee.firstname,project.projid,project.projname FROM employee,
project,emp_proj 
WHERE employee.empid='$empId' AND employee.empid=emp_proj.empid AND
project.projid=emp_proj.projid";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<table><tr><th>Employee Id</th><th>First Name</th><th>Project Id</th><th>Project Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["empid"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["projid"].
      "</td><td>".$row["projname"]."</td></tr>";
  }
  echo "</table>";
}
} else {
  echo "<h1>Project has not assigned to employee</h1>";
}

$conn->close();
?>

</body>
</html>