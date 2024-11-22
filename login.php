<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fasty";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>
            localStorage.setItem('username', '$user');
            window.location.href = 'home.html';
          </script>";
} else {
    echo "Invalid credentials";
}

$conn->close();
?>
