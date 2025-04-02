<?php
session_start();

// Redirect to login page if admin is not logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_login.php");
    exit();
}

include 'db_connection.php';


// Handle status update
if (isset($_POST['update_status'])) {
    $appointment_id = $_POST['appointment_id'];
    $new_status = $_POST['status'];

    $update_query = "UPDATE appointments SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($update_query);
    $stmt->bind_param("si", $new_status, $appointment_id);
    
    if ($stmt->execute()) {
        $message = "Appointment status updated successfully!";
    } else {
        $message = "Error updating status.";
    }
}

// Handle appointment deletion
if (isset($_GET['delete_appointment'])) {
    $appointment_id = $_GET['delete_appointment'];
    $delete_query = "DELETE FROM appointments WHERE id = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("i", $appointment_id);
    
    if ($stmt->execute()) {
        $message = "Appointment deleted successfully!";
    } else {
        $message = "Error deleting appointment.";
    }
}

// Handle query deletion
if (isset($_GET['delete_query'])) {
    $query_id = $_GET['delete_query'];
    $delete_query = "DELETE FROM queries WHERE id = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("i", $query_id);
    
    if ($stmt->execute()) {
        $message = "Query deleted successfully!";
    } else {
        $message = "Error deleting query.";
    }
}

// Fetch all appointments
$appointments_query = "SELECT * FROM appointments ORDER BY created_at DESC";
$appointments_result = $conn->query($appointments_query);

// Fetch all queries
$queries_query = "SELECT * FROM queries ORDER BY created_at DESC";
$queries_result = $conn->query($queries_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Manage Appointments</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f1f1f1;
            margin: 0;
        }

        .navbar {
            background: #007bff;
            padding: 15px;
        }

        .navbar-brand {
            color: white;
            font-weight: bold;
            font-size: 20px;
        }

        .logout-btn {
            color: white;
            background: #dc3545;
            border-radius: 5px;
            padding: 8px 15px;
            text-decoration: none;
            transition: 0.3s ease-in-out;
        }

        .logout-btn:hover {
            background: #c82333;
        }

        .container {
            margin-top: 80px;
        }

        .table-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h4 {
            font-weight: bold;
            color: #333;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .btn-update {
            background: #28a745;
            color: white;
            transition: 0.3s ease-in-out;
        }

        .btn-update:hover {
            background: #218838;
        }

        .btn-delete {
            background: #dc3545;
            color: white;
            border-radius: 5px;
            padding: 8px 15px;
            transition: 0.3s ease-in-out;
        }

        .btn-delete:hover {
            background: #c82333;
        }

        @media (max-width: 768px) {
            .container {
                margin-top: 50px;
            }
        }
    </style>
    <script>
        // Redirect to admin login when user closes the tab or browser
        window.addEventListener("beforeunload", function (event) {
            // Check if the session is still active (You may need to store session data or a flag)
            // Optional: Trigger your PHP session check via AJAX here if needed.
            if (<?php echo $_SESSION['admin_logged_in'] !== true ? 'true' : 'false'; ?>) {
                window.location.href = "admin_login.php";
            }
        });
    </script>
</head>
<body>

<!-- Navbar -->
<nav class="navbar fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand">Admin Panel - Ahirodent Dental Clinic</a>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</nav>

<!-- Main Content -->
<div class="container">
    <h2 class="text-center mb-4">Manage Appointments</h2>

    <?php if (isset($message)): ?>
        <div class="alert alert-info"><?= $message ?></div>
    <?php endif; ?>

    <!-- Appointments Table -->
    <div class="table-container">
        <h4>All Appointments</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Referral</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $appointments_result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= htmlspecialchars($row['name']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td><?= htmlspecialchars($row['phone']) ?></td>
                            <td><?= $row['appointment_date'] ?></td>
                            <td><?= htmlspecialchars($row['referral_source']) ?></td>
                            <td><?= htmlspecialchars($row['message']) ?></td>
                            <td>
                                <form method="POST">
                                    <input type="hidden" name="appointment_id" value="<?= $row['id'] ?>">
                                    <select name="status" class="form-select">
                                        <option value="Pending" <?= $row['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                                        <option value="Confirmed" <?= $row['status'] == 'Confirmed' ? 'selected' : '' ?>>Confirmed</option>
                                        <option value="Cancelled" <?= $row['status'] == 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
                                    </select>
                            </td>
                            <td>
                                    <button type="submit" name="update_status" class="btn btn-update btn-sm">Update</button>
                                    <a href="?delete_appointment=<?= $row['id'] ?>" class="btn btn-delete btn-sm" onclick="return confirm('Are you sure you want to delete this appointment?')">Delete</a>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Queries Table -->
    <div class="table-container mt-4">
        <h4>All Queries</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Query</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($query_row = $queries_result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $query_row['id'] ?></td>
                            <td><?= htmlspecialchars($query_row['name']) ?></td>
                            <td><?= htmlspecialchars($query_row['email']) ?></td>
                            <td><?= htmlspecialchars($query_row['message']) ?></td>
                            <td><?= $query_row['created_at'] ?></td>
                            <td>
                                <a href="?delete_query=<?= $query_row['id'] ?>" class="btn btn-delete btn-sm" onclick="return confirm('Are you sure you want to delete this query?')">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
