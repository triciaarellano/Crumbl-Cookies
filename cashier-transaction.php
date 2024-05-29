<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transactions</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>


body {
    background-color: var(--theme-bg);
    width: 100%;
    height: 100%;
    display: flex;
    overflow: hidden;
    font-size: 15px;
    font-weight: 500;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
    position: absolute;
}

 .header {
	 display: flex;
	 align-items: center;
	 flex-shrink: 0;
	 padding: 30px;
}

.user-settings-container {
      display: flex;
	  position: relative;
	  left: 89%;
    }

    .user-settings {
      position: relative;
      display: flex;
      align-items: center;
      margin-left: 20px;
      cursor: pointer;
    }

    .dropdown-menu {
      display: none;
      position: absolute;
      top: 100%;
      right: 0;
      background-color: white;
      border: 1px solid #ccc;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      z-index: 9999;
    }

    .dropdown-menu a {
      display: block;
      padding: 8px 16px;
      color: black;
      text-decoration: none;
    }

    .dropdown-menu a:hover {
      background-color: #f1f1f1;
    }

    .notify {
      position: relative;
      display: flex;
      align-items: center;
    }

    .notification {
      position: absolute;
      top: 5px;
      right: 5px;
      width: 8px;
      height: 8px;
      background-color: red;
      border-radius: 50%;
    }

 .anim {
	 animation: bottom 0.8s var(--delay) both;
}
 .main-header {
	 font-size: 30px;
	 color: #333;
	 font-weight: 700;
	 padding-bottom: 20px;
	 position: absolute;
	 top: 5%;
	 left: 17%;
	 background: linear-gradient(
		to bottom,
		#f6f7fb 0%, 
		#f6f7fb 78%, 
		rgb(31 29 43 / 0%) 100%
		);

	 z-index: 11;
}


/* -- TABLE -- */

.table__header {
	position: relative;
	width: 99%;
	height: 10%;
	display: flex;
	align-items: center;
  justify-content: flex-start;
  background-color: transparent;
}

.table__header .input-group {
	 width: 45%;
	 height: 100%;
	 border: none;
   margin-left: 20px;
	 background-color: #e4e4e4a9;
	 border-radius: 8px;
	 font-family: var(--body-font);
	 font-size: 14px;
	 font-weight: 500;
	 padding: 0 40px 0 16px;
	 box-shadow: 0 0 0 2px rgba(134, 140, 160, 0.02);
	 color: #ff6486;
}

.table__header .input-group:hover {

	box-shadow: 0 0.1rem 0.4rem #0002;
}

.table__header .input-group input {
	width: 100%;
	padding: 0 0.5rem 0 0.3rem;
	background-color: transparent;
	border: none;
	outline: none;
  color: #ff6486;
}

.table__body {
	width: 95%;
	max-height: calc(89% - 1.6rem);
	background-color: #fffb;
	border: 2px solid gainsboro;

	margin: 0.8rem auto;
	border-radius: 0.6rem;

	overflow: auto;
	overflow: overlay;
}

.table__body::-webkit-scrollbar {
	width: 0.3rem;
	height: 0.5rem;
	background-color: gainsboro;
}

.table__body::-webkit-scrollbar-thumb {
	border-radius: 0.5rem;
	background-color: #0004;
	visibility: hidden;
}

.table__body:hover::-webkit-scrollbar-thumb {
	visibility: visible;
}

table {
	width: 100%;
}

table,
th,
td {
	border-collapse: collapse;
	padding: 1rem;
	text-align: left;
}

thead th {
	padding: 1.5rem;
	position: sticky;
	top: 0;
	left: 0;
	background-color: #fefffe;
	cursor: pointer;
	text-transform: capitalize;
	color: var(--toggle-color);
	z-index: 2;
}


th::after {
	content: "";
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 2px;
	background-color: gainsboro;
	z-index: -1;
}

tbody tr:nth-child(even) {
	background-color: white;
}

tbody tr {
	--delay: 0.1s;
	transition: 0.5s ease-in-out var(--delay), background-color 0s;
}

tbody tr.hide {
	opacity: 0;
	transform: translateX(100%);
}

tbody tr:hover {
	background-color: #fce1e7 !important;
}

tbody tr td,
tbody tr td p,
tbody tr td img {
	transition: 0.2s ease-in-out;
}

tbody tr.hide td,
tbody tr.hide td p {
	padding: 0;
	font: 0 / 0 sans-serif;
	transition: 0.2s ease-in-out 0.5s;
}

@media (max-width: 1000px) {
	td:not(:first-of-type) {
		min-width: 12.1rem;
	}
}

thead th span.icon-arrow {
	display: inline-block;
	width: 1.3rem;
	height: 1.3rem;
	border-radius: 50%;
	border: 1.4px solid transparent;

	text-align: center;
	font-size: 1rem;

	margin-left: 0.5rem;
	transition: 0.2s ease-in-out;
}

thead th:hover span.icon-arrow {
	border: 1.4px solid #fc6782;
}

thead th:hover {
	color: #fc6782;
}

thead th.active span.icon-arrow {
	background-color: #fc6782;
	color: #fff;
}

thead th.asc span.icon-arrow {
	transform: rotate(180deg);
}

thead th.active,
tbody td.active {
	color: #fc6782;
}

/* -- MODAL -- */

.modal-content {
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
}

.modal-header {
  background-color: #f095a8;
  color: white;
}

.modal-title {
  font-weight: bold;
  font-size: 1.5rem;
}

.modal-header .btn-close {
  filter: brightness(0) invert(1);
}

.modal-body {
  padding: 20px;
  background-color: #f8f9fa;
}

.modal-footer {
  background-color: transparent;
  border-top: none;
  padding: 15px;
}

.modal-footer .btn-secondary {
  background-color: #ff5151;
  border-color: #f095a8;
}

.modal-footer .btn-pink {
  background-color: transparent;
  border-color: transparent;
}

.btn-pink {
            background-color: #f095a8;
            padding: 10px;
            margin-top: 20px;
            margin-left: 40px;
            color: #eee;
            font-family: '', sans-serif;
            font-size: 17px;
        }

.btn-pink:hover {
            background-color: #f095a8;
            color: #eee;
        }

.btn-refresh {
    background-color: transparent;
    border: none;
    border-radius: 5px;
    width: 4rem;
    height: 3rem; 
    display: flex;
    justify-content: flex-end; 
    margin-top: 20px;
}

.btn-refresh i {
    background-color: transparent;
    border: none;
    color: #f095a8;
    font-family: '', sans-serif;
    font-size: 25px;
    line-height: 0;
    margin-top: 5px;
}

.modal-footer .btn-secondary {
  background-color: #ff5151;
  border-color: #f095a8;
}

.modal-footer .btn-primary {
  margin-right: -15px;
  border-color: transparent;
}

/* -- COLLAPSE CARD -- */

.card {
  background-color: pink;
}

.unavailable-status {
  color: red;
}

.form-label {
  color: #333;
}

</style>
 
</style>
</head>
  <body>
  
  <div class="sidebar">
  <a class="logo" href="dashboard.php">
    <img src="images/logopic.png" alt="Logo">
  </a>

  <div class="side-wrapper">
   <div class="side-title">CATEGORY</div>
   <div class="side-menu">
    <a class="sidebar-link" href="homepagecashier.php">
     <i class="bi bi-house-door icon"></i>
     Overview
    </a>
    <a class="sidebar-link" href="menu-products.php">
    <i class="bi bi-cart icon"></i>
     Our Products
    </a>
    <a class="sidebar-link is-active" href="cashier-transaction.php">
     <i class="bi bi-receipt"></i>
     Transactions
    </a>
    <a class="sidebar-link" href="cashier-salesrecord.php">
     <i class="bi bi-journal icon"></i>
     Sales Record
    </a>
   </div>
  </div>

  <div class="side-wrapper">
   <div class="side-menu">

    <a class="sidebar-link" href="logout.php">
     <i class="bi bi-box-arrow-right icon"></i>
     Log out
    </a>
   </div>
  </div>
 </div>


 <div class="wrapper-table">
  <div class="header">

   <div class="user-settings-container">
      <div class="user-settings">
        <i class="bi bi-person-circle"></i>
        <i class="bi bi-chevron-down"></i>
        <div class="dropdown-menu">
          <a href="#account">Account</a>
          <a href="#settings">Settings</a>
          <a href="logout.php">Logout</a>
        </div>
      </div>
      
      <div class="user-settings">
        <div class="notify">
          <div class="notification"></div>
          <i class="bi bi-bell-fill"></i>
        </div>
      </div>
    </div>
  </div>


  <div class="main-container">
   <div class="main-header anim" style="--delay: 0s">Transactions</div>
</div>

<!-- Add Transaction Modal -->
<div class="modal fade" id="addTransactionModal" tabindex="-1" aria-labelledby="addTransactionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addTransactionModalLabel">Add Transaction</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form Inside Modal -->
                    <form action="transactions.php" method="post">
                        <div class="mb-3">
                            <label for="product_id" class="form-label">Product ID</label>
                            <input type="text" class="form-control" id="product_id" name="product_id" required>
                        </div>
                        <div class="mb-3">
                            <label for="quantity_sold" class="form-label">Quantity Sold</label>
                            <input type="text" class="form-control" id="quantity_sold" name="quantity_sold" required>
                        </div>
                        <div class="mb-3">
                            <label for="reference_number" class="form-label">Reference Number</label>
                            <input type="text" class="form-control" id="reference_number" name="reference_number">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="Paid">Paid</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="transaction_date" class="form-label">Transaction Date</label>
                            <input type="date" class="form-control" id="transaction_date" name="transaction_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="total_amount" class="form-label">Total Amount</label>
                            <input type="number" step="0.01" class="form-control" id="total_amount" name="total_amount" required>
                        </div>
                        <div class="mb-3">
                            <label for="payment_method" class="form-label">Payment Method</label>
                            <select class="form-select" id="payment_method" name="payment_method" required>
                                <option value="Cash">Cash</option>
                                <option value="GCash">GCash</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="addTransaction" id="addTransaction">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php
include "dbconnect.php";

// Function to decrease the quantity available and check for archiving
function decreaseProductQuantity($conn, $product_id, $quantity_sold) {
    // Get current quantity
    $get_quantity_sql = "SELECT product_name, quantity_available FROM product_table WHERE product_id = '$product_id'";
    $quantity_result = $conn->query($get_quantity_sql);
    
    if ($quantity_result->num_rows > 0) {
        $row = $quantity_result->fetch_assoc();
        $current_quantity = $row['quantity_available'];
        $product_name = $row['product_name'];

        // Calculate new quantity
        $new_quantity = $current_quantity - $quantity_sold;

        if ($new_quantity < 0) {
            throw new Exception("Not enough quantity available.");
        }

        // Update the quantity
        $update_quantity_sql = "UPDATE product_table SET quantity_available = '$new_quantity' WHERE product_id = '$product_id'";
        if (!$conn->query($update_quantity_sql)) {
            throw new Exception("Error updating quantity: " . $conn->error);
        }

        // Check if quantity is 0 to archive the product
        if ($new_quantity == 0) {
            archiveProduct($conn, $product_name);
        }
    } else {
        throw new Exception("Product not found.");
    }
}

// Function to archive product
function archiveProduct($conn, $product_name) {
    $update_status_sql = "UPDATE product_table SET status = 'Unavailable' WHERE product_name = '$product_name'";
    if (!$conn->query($update_status_sql)) {
        throw new Exception("Error archiving product: " . $conn->error);
    }
}

// Add transaction form submission
if (isset($_POST['addTransaction'])) {
  
  if (isset($_POST['product_id'], $_POST['quantity_sold'], $_POST['status'], $_POST['transaction_date'], $_POST['total_amount'], $_POST['payment_method'])) {
      $product_id = $_POST['product_id'];
      $quantity_sold = $_POST['quantity_sold'];
      $reference_number = 'none'; 
      $receipt_number = uniqid('rec_');
      $status = $_POST['status'];
      $transaction_date = $_POST['transaction_date'];
      $total_amount = $_POST['total_amount'];
      $payment_method = $_POST['payment_method'];

      // Check if a transaction with the same receipt number already exists
      $transsql = "SELECT * FROM transaction_table WHERE receipt_number = '$receipt_number'";
      $trans_result = $conn->query($transsql);

      if ($trans_result->num_rows > 0) {
          // If a transaction with the same receipt number exists, use the existing reference number
          $existing_transaction = $trans_result->fetch_assoc();
          $reference_number = $existing_transaction['reference_number'];
      }

      $conn->begin_transaction();

      try {
          // Insert the transaction with the appropriate reference number
          $insert_trans_sql = "INSERT INTO transaction_table (product_id, quantity_sold, reference_number, receipt_number, status, transaction_date)
                              VALUES ('$product_id', '$quantity_sold', '$reference_number', '$receipt_number', '$status', '$transaction_date')";
          $trans_result = $conn->query($insert_trans_sql);

          if ($trans_result === TRUE) {
              $transaction_id = $conn->insert_id;

              // Insert the sales record
              $insert_sales_sql = "INSERT INTO sales_table (transaction_id, total_quantity, total_amount, payment_method, sales_date)
                                  VALUES ('$transaction_id', '$quantity_sold', '$total_amount', '$payment_method', '$transaction_date')";
              $sales_result = $conn->query($insert_sales_sql);

              if ($sales_result === TRUE) {
                  // Decrease the product quantity and check for archiving
                  decreaseProductQuantity($conn, $product_id, $quantity_sold);

                  $conn->commit();

                  echo "
                  <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
                  <script>
                      Swal.fire({
                          title: 'Success!',
                          text: 'Transaction and sales record have been added successfully!',
                          icon: 'success'
                      });
                  </script>";
              } else {
                  throw new Exception("Error in sales table: " . $conn->error);
              }
          } else {
              throw new Exception("Error in transaction table: " . $conn->error);
          }
      } catch (Exception $e) {
          $conn->rollback();
          echo "
          <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
          <script>
              Swal.fire({
                  title: 'Error!',
                  text: '" . $e->getMessage() . "',
                  icon: 'error'
              });
          </script>";
      }
  } else {
      echo "
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
      <script>
          Swal.fire({
              title: 'Error!',
              text: 'All form fields are required.',
              icon: 'error'
          });
      </script>";
  }
}

$selectsql = "SELECT * FROM join_transaction_table ORDER BY transaction_id DESC";

// Check if the search input is clicked and not null, change $selectsql syntax
if (isset($_POST['search']) && $_POST['search'] != NULL) {
    $searchinput = mysqli_real_escape_string($conn, $_POST['search']);
    $selectsql = "SELECT * FROM join_transaction_table AND (transaction_id LIKE '%$searchinput%' OR product_id LIKE '%$searchinput%' OR transaction_date LIKE '%$searchinput%')";
}

$result = $conn->query($selectsql);


  // Check if table is not empty
if ($result->num_rows > 0) {
  echo "<main class='table anim' style='--delay: .4s' id='user_table'>";
  echo "<section class='table__header anim' style='--delay: .2s'>";
  echo "<div class='input-group'>";
  echo "<input type='search' name='search' class='search-input' placeholder='Search Transactions'>";
  echo "</div>";
  echo "<button type='button' class='btn btn-pink bi bi-plus' data-bs-toggle='modal' data-bs-target='#addTransactionModal'> Add Transaction</button>";
  echo "<button id='refreshButton' class='btn-refresh'><i class='bi bi-arrow-clockwise'></i></button>";
  echo "</section>";
  echo "<section class='table__body'>";
  echo "<table>";
  echo "<thead>";
  echo "<tr>";
  echo "<th>Transaction ID<span class='icon-arrow'>&UpArrow;</span></th>";
  echo "<th>Product ID<span class='icon-arrow'>&UpArrow;</span></th>";
  echo "<th>Price <span class='icon-arrow'>&UpArrow;</span></th>";
  echo "<th>Quantity <span class='icon-arrow'>&UpArrow;</span></th>";
  echo "<th>Reference Number</th>";
  echo "<th>Receipt Number</th>";
  echo "<th>Status <span class='icon-arrow'>&UpArrow;</span></th>";
  echo "<th>Transaction Date</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

       foreach ($result as $fielddata) {
        echo "<tr>";
        echo "<td>" . $fielddata['transaction_id'] . "</td>";
        echo "<td>" . $fielddata['product_id'] . "</td>";
        echo "<td>" . $fielddata['price'] . "</td>";
        echo "<td>" . $fielddata['quantity_sold'] . "</td>";
        echo "<td>" . $fielddata['reference_number'] . "</td>";
        echo "<td>" . $fielddata['receipt_number'] . "</td>";
        echo "<td>" . $fielddata['status'] . "</td>";
        echo "<td>" . date('Y-m-d', strtotime($fielddata['transaction_date'])) . "</td>";
        echo "</tr>";

        }

        echo "</tbody>";
        echo "</table>";
        echo "</section>";
        echo "</main>";
        
      } else {
        echo "No records found";
        }
        ?>


         <script src='script.js'></script>

         <script>
    document.addEventListener("DOMContentLoaded", function() {
        const userSettings = document.querySelector('.user-settings');
        const dropdownMenu = document.querySelector('.dropdown-menu');
        const sidebarLinks = document.querySelectorAll(".sidebar-link");
        const sidebar = document.querySelector(".sidebar");
        const mainContainer = document.querySelector(".main-container");
        const logoElements = document.querySelectorAll(".logo, .logo-expand, .sidebar-link");


        userSettings.addEventListener('click', function() {
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });

        window.addEventListener('click', function(event) {
            if (!userSettings.contains(event.target)) {
                dropdownMenu.style.display = 'none';
            }
        });

        function handleSidebarLinkClick(event) {
            sidebarLinks.forEach(function(link) {
                link.classList.remove("is-active");
            });

            event.target.classList.add("is-active");
        }

        sidebarLinks.forEach(function(link) {
            link.addEventListener("click", handleSidebarLinkClick);
        });


        function handleWindowResize() {
            if (window.innerWidth > 1090) {
                sidebar.classList.remove("collapse");
            } else {
                sidebar.classList.add("collapse");
            }
        }

        window.addEventListener("resize", handleWindowResize);
        handleWindowResize();

        function handleLogoClick() {

            mainContainer.classList.remove("show");
            mainContainer.scrollTop = 0;
        }

        logoElements.forEach(function(element) {
            element.addEventListener("click", handleLogoClick);
        });

    });

    // refresh button function
    document.getElementById('refreshButton').addEventListener('click', function() {
        location.reload();
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
 
</html>