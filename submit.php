$password = "CHANGE_ME";
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "webuser";
$password = "CHANGE_ME";
$dbname = "form_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$name = $_POST['name'];
$age = $_POST['age'];
$userpass = $_POST['password'];

$sql = "INSERT INTO users (name, age, password) VALUES ('$name', '$age', '$userpass')";
$conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Submission Successful</title>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Orbitron', sans-serif;
  background: linear-gradient(-45deg, #0c0120, #140035, #230052);
  background-size: 400% 400%;
  animation: moveBg 10s ease infinite;
  color: #fff;
  text-align: center;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
@keyframes moveBg {
  0%, 100% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
}
h2 {
  text-shadow: 0 0 15px #6a00ff;
  color: #b188ff;
}
a {
  display: inline-block;
  margin-top: 25px;
  color: #00bfff;
  text-decoration: none;
  border: 1px solid #00bfff;
  padding: 10px 20px;
  border-radius: 10px;
  transition: 0.3s;
}
a:hover {
  background: #00bfff;
  color: #000;
  box-shadow: 0 0 15px #00bfff;
}
</style>
</head>
<body>
  <h2>🎉 Submission Successful!</h2>
  <a href="index.html">Back</a>
  <a href="view.php">View Users</a>
</body>
</html>
