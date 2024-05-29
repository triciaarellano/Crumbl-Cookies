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

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Location: menu-products.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Successful</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.css" rel="stylesheet">

    <style>
      
body,html {
  height:100%;
  margin:0;
  font-family:lato;
  background-color: pink;
  overflow-y: hidden;
}

h2 {
  margin-bottom:0px;
  margin-top:25px;
  text-align:center;
  font-weight:200;
  font-size:19px;
  font-size:1.2rem;
  
}

.container {
  height: 100vh;
  display: flex;
  justify-content: center; 
  align-items: center; 
  margin-left: 50px;
  overflow-y: hidden;
}


.thin {
  font-weight:400;
}

.small {
  font-size:12px;
  font-size:.8rem;
}

.half-input-table {
  border-collapse:collapse;
  width:100%;
}

.half-input-table td:first-of-type {
  border-right:10px solid #4488dd;
  width:50%;
}

.window {
  height:540px;
  width:800px;
  background:#FCE1E7;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.2);
  border-radius:30px;
  z-index:10;
}

.order-info {
  height: 100%;
  width: 50%;
  padding-left: 25px;
  padding-right: 25px;
  box-sizing: border-box;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  position: relative;
  background-image: url('images/crumbl-side.png'); 
  background-size: cover; 
  background-position: center; 
  border-radius:30px;
}

.price {
  bottom:0px;
  position:absolute;
  right:0px;
  color:#4488dd;
}
.order-table td:first-of-type {
  width:25%;
}
.order-table {
    position:relative;
}
.line {
  height:1px;
  width:100%;
  margin-top:10px;
  margin-bottom:10px;
  background:#ddd;
}
.order-table td:last-of-type {
  vertical-align:top;
  padding-left:25px;
}
.order-info-content {
  table-layout:fixed;

}

.full-width {
  width:100%;
}
.pay-btn {
  border:none;
  background:pink;
  line-height:2em;
  border-radius:10px;
  font-size:19px;
  font-size:1.2rem;
  color:#fff;
  cursor:pointer;
  position:absolute;
  bottom:25px;
  width:calc(100% - 50px);
  -webkit-transition:all .2s ease;
          transition:all .2s ease;
}
.pay-btn:hover {
  background:#ff6486;
    color:#eee;
  -webkit-transition:all .2s ease;
          transition:all .2s ease;
}

.total {
  margin-top:25px;
  font-size:20px;
  font-size:1.3rem;
  position:absolute;
  bottom:30px;
  right:27px;
  left:35px;
}
.dense {
  line-height:1.2em;
  font-size:16px;
  font-size:1rem;
}

.gcash-info {
  background:#fff;
  height:100%;
  width:50%;
  color:black;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  font-size:14px;
  font-size:.9rem;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  box-sizing:border-box;
  padding-left:25px;
  padding-right:25px;
  border-top-right-radius:30px;
  border-bottom-right-radius:30px;
  position:relative;
}

.gcash-image {
  display:block;
  max-height:80px;
  margin-left:auto;
  margin-right:auto;
  margin-top:35px;
  margin-bottom:15px;
}
.gcash-info-content {
  margin-top:25px;
  -webkit-flex-flow:column;
      -ms-flex-flow:column;
          flex-flow:column;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  width:100%;
}
@media (max-width: 600px) {
  .window {
    width: 100%;
    height: 100%;
    display:block;
    border-radius:0px;
  }
  .order-info {
    width:100%;
    height:auto;
    padding-bottom:100px;
    border-radius:0px;
  }
  .gcash-info {
    width:100%;
    height:auto;
    padding-bottom:100px;
    border-radius:0px;
  }
  .pay-btn {
    border-radius:0px;
  }
}
</style>
</head>
<body>
    
<form method="POST" action="">
        <div class='container'>
            <div class='window'>
                <div class='order-info'>
                    <div class='order-info-content'>
                    </div>
                </div>
                <div class='gcash-info'>
                    <div class='gcash-info-content'>
                    <h1>Order Successful</h1>
                        <p>Your receipt number is: <strong><?php echo $receiptNumber; ?></strong></p>
                        <p>Transaction Details:</p>
                        Transaction ID: <?php echo $transactionRow['transaction_id']; ?><br>
                        Date: <?php echo $transactionRow['transaction_date']; ?>
                        <button type='submit' class='pay-btn'>Go to Menu</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </form>
</body>
</html>
