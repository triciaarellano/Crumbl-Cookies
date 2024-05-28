<?php
include "dbconnect.php";
date_default_timezone_set("Asia/Manila");

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

    $updateSql = "UPDATE transaction_table SET reference_number = '$referenceNumber', status = 'paid' WHERE transaction_id = '$transactionId'";
    if ($conn->query($updateSql) === TRUE) {
        echo "
        <html>
        <head>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
        </head>
        <body>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'You have paid successfully!',
                        showConfirmButton: false,
                        timer: 1500,
                        willClose: () => {
                            window.location.href = 'menu-products.php'; // Redirect to menu-products.php
                        }
                    });
                });
            </script>
        </body>
        </html>
        ";
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
  background:#22b877;
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
  background:#22a877;
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

.input-field {
  background:rgba(255,255,255,0.1);
  margin-bottom:10px;
  margin-top:3px;
  line-height:1.5em;
  font-size:20px;
  font-size:1.3rem;
  border:none;
  padding:5px 10px 5px 10px;
  color:#fff;
  box-sizing:border-box;
  width:100%;
  margin-left:auto;
  margin-right:auto;
}

.input-field-ref {
  background:rgba(255,255,255,0.1);
  margin-bottom:10px;
  margin-top:3px;
  line-height:1.5em;
  font-size:20px;
  font-size:1.3rem;
  border:none;
  padding:5px 10px 5px 10px;
  color:#fff;
  box-sizing:border-box;
  width:100%;
  margin-left:auto;
  margin-right:auto;
}

.gcash-info {
  background:#4488dd;
  height:100%;
  width:50%;
  color:#eee;
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
.dropdown-btn {
  background:rgba(255,255,255,0.1);
  width:100%;
  border-radius:5px;
  text-align:center;
  line-height:1.5em;
  cursor:pointer;
  position:relative;
  -webkit-transition:background .2s ease;
          transition:background .2s ease;
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
        <!-- <h2>Order Summary</h2>
                <div class='line'></div>
        <table class='order-table'>
          <tbody>
            <tr>
              <td><img src='images/cookie-login.png' class='full-width'></img> 
              </td>
              <td>
                <br> <span class='thin'>Testing</span>
                <br> Dito yung description?<br> <span class='thin small'>Quantity<br><br></span>
              </td>

            </tr>
            <tr>
              <td>
                <div class='price'>Price</div>
              </td>
            </tr>
          </tbody>

        </table>

        <div class='line'></div>
        <div class='total'>
          <span style='float:left;'>
            TOTAL
          </span>
          <span style='float:right; text-align:right;'>
            PHP435.55
          </span>
        </div> -->
</div>
</div>
        <div class='gcash-info'>
          <div class='gcash-info-content'>

            <img src='images/gcash-white.png' height='80' class='gcash-image' id='gcash-image'></img>
            Phone Number
            <input class='input-field'></input>
            Reference Number
            <input class='input-field-ref' id="reference_number" name="reference_number" required></input>
            <table class='half-input-table'></table>
            <p>Please proceed with your payment using GCash.</p>
            <p>Transaction ID: <?php echo $transactionId; ?></p>
            <button type='submit' class='pay-btn'>Place Order</button>

          </div>

        </div>
      </div>
</div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </form>


</body>
</html>
