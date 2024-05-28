<?php
include "dbconnect.php";

if (isset($_GET['transaction_id'])) {
    $transactionId = mysqli_real_escape_string($conn, $_GET['transaction_id']);

    // Fetch transaction details, including the receipt number
    $transactionSql = "SELECT * FROM transaction_table WHERE transaction_id = '$transactionId'";
    $transactionResult = $conn->query($transactionSql);
    if ($transactionResult->num_rows > 0) {
        $transactionRow = $transactionResult->fetch_assoc();
        $receiptNumber = $transactionRow['receipt_number'];
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
    <title>Order Successful</title>
</head>
<body>
    <h1>Order Successful</h1>
    <p>Thank you for your purchase!</p>
    <p>Your receipt number is: <strong><?php echo $receiptNumber; ?></strong></p>
    <p>Transaction Details:</p>
    <ul>
        <li>Transaction ID: <?php echo $transactionRow['transaction_id']; ?></li>
        <li>Date: <?php echo $transactionRow['transaction_date']; ?></li>
        <!-- Add other transaction details as needed -->
    </ul>
</body>
</html>
