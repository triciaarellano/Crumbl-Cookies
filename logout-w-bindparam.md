# logout-w-bindparam

<?php
require_once "dbconnect.php";
session_start();

$user_id = $_SESSION['user_id'];
$fullname = $_SESSION['full_name'];
$user_type = $_SESSION['role'];

// Prepare the SQL statement with placeholders
$logoutsql = "INSERT INTO join_logs_user (log_id, role, username, action, DateTime) VALUES (?, ?, ?, 'Logged OUT', NOW())";

// Prepare the statement
$stmt = $conn->prepare($logoutsql);

if ($stmt) {
    // Bind the parameters
    $stmt->bind_param("iss", $user_id, $user_type, $fullname);

    // Execute the statement
    $stmt->execute();

    // Check for errors
    if ($stmt->error) {
        echo "Error: " . $stmt->error;
    } else {
        echo "Logout log inserted successfully.";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Error preparing statement: " . $conn->error;
}

// Destroy the session
session_destroy();
?>
