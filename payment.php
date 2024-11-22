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

$card_number = $_POST['card-number'];
$expiry_date = $_POST['expiry-date'];
$cvv = $_POST['cvv'];
$total_amount = $_POST['total-amount'];

// Insert payment data into the database
$sql = "INSERT INTO payments (card_number, expiry_date, cvv, total_amount) VALUES ('$card_number', '$expiry_date', '$cvv', '$total_amount')";

if ($conn->query($sql) === TRUE) {
    header("Location: receipt.html"); // Redirect to receipt page
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
