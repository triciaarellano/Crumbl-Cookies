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

// Handle reference number submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reference_number'])) {
    $referenceNumber = mysqli_real_escape_string($conn, $_POST['reference_number']);

    // Update the reference number and status in the transaction_table
    $updateSql = "UPDATE transaction_table SET reference_number = '$referenceNumber', status = 'paid' WHERE transaction_id = '$transactionId'";
    if ($conn->query($updateSql) === TRUE) {
        echo "Reference number updated and status set to paid successfully.";
    } else {
        echo "Error updating reference number and status: " . $conn->error;
    }
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
    
    <form method="POST" action="">
        <label for="reference_number">Reference Number:</label>
        <input type="text" id="reference_number" name="reference_number" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
