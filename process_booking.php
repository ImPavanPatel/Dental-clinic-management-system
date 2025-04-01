<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "dental_clinic";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $appointment_date = $conn->real_escape_string($_POST['appointment_date']);
    $referral_source = $conn->real_escape_string($_POST['referral_source']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into the database
    $sql = "INSERT INTO appointments (name, email, phone, appointment_date, referral_source, message) 
            VALUES ('$name', '$email', '$phone', '$appointment_date', '$referral_source', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Appointment booked successfully!');
            window.location.href = 'booking.html';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
