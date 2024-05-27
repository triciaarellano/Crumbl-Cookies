<?php
include "dbconnect.php";

if (isset($_GET['transaction_id'])) {
    $transactionId = mysqli_real_escape_string($conn, $_GET['transaction_id']);

    // Fetch transaction details using the transaction ID
    $transactionSql = "SELECT * FROM transaction_table WHERE transaction_id = '$transactionId'";
    $transactionResult = $conn->query($transactionSql);

    if ($transactionResult->num_rows > 0) {
        $transactionRow = $transactionResult->fetch_assoc();
        // You can now use $transactionRow to display transaction details or process the payment
    } else {
        echo "Transaction not found.";
        exit;
    }
} else {
    echo "Transaction ID is missing.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GCash Payment</title>
</head>
<body>
    <h1>GCash Payment</h1>
    <p>Please proceed with your payment using GCash.</p>
    <p>Transaction ID: <?php echo $transactionId; ?></p>
    <!-- Include GCash payment form or instructions here -->
</body>
</html>
