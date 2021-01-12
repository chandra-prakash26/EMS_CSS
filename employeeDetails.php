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
//$firstName= filter_input(INPUT_POST, 'firstname');
$firstName  = $_GET['firstname'];
//$checkEmpId="SELECT EXISTS(SELECT empid FROM employee WHERE empid='$empId')";

$sql = "SELECT empid, firstname, lastname, mobileno, dob, gender, city, hobby FROM employee
 WHERE firstname='$firstName'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<h1 style='color:blue; border:2px red solid; text-align:center;'>Employee Details</h1>";
    echo "<table><tr><th>EmpId</th><th>FirstName</th><th>LastName</th><th>Mobile Number</th>
    <th>Date Of Birth</th><th>Gender</th><th>City</th><th>hobby</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["empid"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"].
        "</td><td>".$row["mobileno"]."</td><td>".$row["dob"]."</td><td>".$row["gender"]."</td><td>".
        $row["city"]."</td><td>".$row["hobby"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>