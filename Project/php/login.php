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
echo $user;

$sql = "SELECT * FROM users WHERE username = '".$user."' AND password = '".$pass."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  header("Location: ../templates/Home.html");
} else {
  header("Location: ../templates/loginPageWrongCredentials.html");
}
?>

</body>
</html>