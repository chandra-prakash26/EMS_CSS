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
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$mobno = filter_input(INPUT_POST, 'mobno');
$DOB = filter_input(INPUT_POST, 'DOB');
$gender = filter_input(INPUT_POST, 'gender');
$city = filter_input(INPUT_POST, 'city');
$hobby = "";
foreach($_POST['hobby'] as $hobbies){
  $hobby = $hobby. " ".$hobbies;
}

$sql = "INSERT INTO employee (firstname, lastname, mobileno, dob, gender, city, hobby)
VALUES ('$firstname', '$lastname', '$mobno', '$DOB', '$gender', '$city', '$hobby')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>New record created successfully<h2>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>