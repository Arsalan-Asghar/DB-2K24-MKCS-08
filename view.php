<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "webuser";
$password = "CHANGE_ME";
$dbname = "form_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

if (isset($_GET['delete'])) {
    $id_to_delete = intval($_GET['delete']);
    $conn->query("DELETE FROM users WHERE id=$id_to_delete");
    header("Location: view.php");
    exit;
}

$result = $conn->query("SELECT id, name, age, password FROM users");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registered Users</title>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
<style>
body {
  background: linear-gradient(120deg, #090013, #0b0033, #160066);
  background-size: 400% 400%;
  animation: shift 12s ease infinite;
  font-family: 'Orbitron', sans-serif;
  color: #fff;
  text-align: center;
}
@keyframes shift {
  0%,100% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
}
h2 {
  margin-top: 40px;
  color: #a580ff;
  text-shadow: 0 0 15px #823bff;
}
table {
  width: 85%;
  margin: 40px auto;
  border-collapse: collapse;
  background: rgba(255,255,255,0.05);
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 0 30px rgba(138, 43, 226, 0.2);
  backdrop-filter: blur(12px);
  animation: fadeIn 1.5s ease;
}
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
th, td {
  padding: 15px;
  border-bottom: 1px solid rgba(255,255,255,0.1);
}
th {
  color: #b088ff;
  text-shadow: 0 0 10px #823bff;
}
a.delete {
  color: #ff4b5c;
  text-decoration: none;
  transition: 0.3s;
}
a.delete:hover {
  color: #ff8090;
  text-shadow: 0 0 10px #ff4b5c;
}
</style>
</head>
<body>
<h2>Registered Users</h2>
<table>
<tr><th>ID</th><th>Name</th><th>Age</th><th>Password</th><th>Action</th></tr>
<?php
if ($result->num_rows > 0) {
    while($row=$result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".htmlspecialchars($row['id'])."</td>";
        echo "<td>".htmlspecialchars($row['name'])."</td>";
        echo "<td>".htmlspecialchars($row['age'])."</td>";
        echo "<td>".htmlspecialchars($row['password'])."</td>";
        echo "<td><a class='delete' href='view.php?delete=".$row['id']."' onclick=\"return confirm('Delete this user?');\">Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No users found</td></tr>";
}
$conn->close();
?>
</table>
</body>
</html>
