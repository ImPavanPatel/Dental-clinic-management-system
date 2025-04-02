<?php
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "ahirodent";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get Form Data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert into database
$sql = "INSERT INTO queries (name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    echo "<script>alert('Query submitted successfully!'); window.location='faq.php';</script>";
} else {
    echo "<script>alert('Error: Unable to submit query.'); window.location='faq.php';</script>";
}

$stmt->close();
$conn->close();
?>
