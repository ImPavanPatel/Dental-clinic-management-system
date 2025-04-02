<?php
session_start();
include 'db_connection.php'; // Ensure this file connects to the database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $query = "SELECT * FROM admin WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $admin = $result->fetch_assoc();
        
        // If password is hashed, use password_verify
        if (password_verify($password, $admin['password'])) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $username;
            header("Location: admin_panel.php");
            exit();
        } 
        // If passwords are stored in plain text (not recommended)
        elseif ($password == $admin['password']) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $username;
            header("Location: admin_panel.php");
            exit();
        } 
        else {
            echo "<script>alert('Incorrect password'); window.location.href='admin_login.php';</script>";
        }
    } else {
        echo "<script>alert('Admin not found'); window.location.href='admin_login.php';</script>";
    }
}
?>
