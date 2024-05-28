<?php

if (!isset($_SESSION)) {
    session_start();
}
require "dbconnect.php";
$user_id = $_SESSION['user_id'];

function logActivity($con, $user_id, $action) {
    $logsql = $con->prepare("INSERT INTO logs_table (user_id, action, DateTime) VALUES (?, ?, NOW())");
    if (!$logsql) {
        // Error Message
        return "Error: " . $con->error;
    }
    
    $logsql->bind_param('is', $user_id, $action);

    if ($logsql->execute()) {
        // Log successfully
        return true;
    } else {
        // Error Message
        return "Error: " . $logsql->error;
    }
}

?>