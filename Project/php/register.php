<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dark_souls";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$user = isset($_POST['username']) ? $_POST['username'] : NULL;
$pass = isset($_POST['password']) ? $_POST['password'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;


$sql = "INSERT INTO users (username, password, email)
VALUES ('". $user ."','".$pass."','".$email."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: ../templates/loginPage.html");

?>
</body>
</html>