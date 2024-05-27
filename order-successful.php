<?php
include "dbconnect.php";

// Function to generate a random receipt number
function generateReceiptNumber() {
    return 'R' . strtoupper(bin2hex(random_bytes(5)));
}

if (isset($_GET['transaction_id'])) {
    $transactionId = mysqli_real_escape_string($conn, $_GET['transaction_id']);
    
    // Generate receipt number
    $receiptNumber = generateReceiptNumber();

    // Update transaction with receipt number
    $updateReceiptSql = "UPDATE transaction_table SET receipt_number = '$receiptNumber' WHERE transaction_id = '$transactionId'";
    if ($conn->query($updateReceiptSql) !== TRUE) {
        echo "Error updating receipt number: " . $conn->error;
        exit;
    }

    // Fetch transaction details
    $transactionSql = "SELECT * FROM transaction_table WHERE transaction_id = '$transactionId'";
    $transactionResult = $conn->query($transactionSql);
    if ($transactionResult->num_rows > 0) {
        $transactionRow = $transactionResult->fetch_assoc();
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
