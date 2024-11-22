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

// Retrieve POST data
$user = $_POST['username'];
$pass = $_POST['password'];

// Insert user into database
$sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
if ($conn->query($sql) === TRUE) {
    header("Location: login.html"); // Redirect to login page
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
