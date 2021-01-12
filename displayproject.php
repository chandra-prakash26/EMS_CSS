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
$sql = "SELECT projid,projname,projdesc,projstartdate,projenddate FROM project";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<h1 style='color:blue; border:2px red solid; text-align:center;'>Project Details</h1>";
    echo "<table><tr><th>ProjectId</th><th>ProjectName</th><th>ProjectDesc</th><th>ProjectStartDate</th>
    <th>ProjectEndDate</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["projid"]. "</td><td>" . $row["projname"]. "</td><td>" . $row["projdesc"].
        "</td><td>".$row["projstartdate"]."</td><td>".$row["projenddate"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>