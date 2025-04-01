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

// Retrieve all appointments
$sql = "SELECT * FROM appointments ORDER BY appointment_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointment List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Appointment List</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Appointment Date</th>
            <th>Referral Source</th>
            <th>Message</th>
            <th>Created At</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['appointment_date']}</td>
                    <td>{$row['referral_source']}</td>
                    <td>{$row['message']}</td>
                    <td>{$row['created_at']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No appointments found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
