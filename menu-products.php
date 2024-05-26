<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cashier</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>


body {
    background-color: var(--theme-bg);
    width: 100%;
    height: 100%;
    display: flex;
    overflow-y: hidden;
    font-size: 15px;
    font-weight: 500;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
    position: relative;
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


/* Add this CSS */
.content-container {
  display: flex;
  justify-content: space-between; /* Adjusts spacing between elements */
  height: 100%; /* Ensures the container takes full height of its parent */
}

.product-container {
    display: flex;
    flex-wrap: wrap;
    flex: 3; /* Adjust the flex value as needed */
    gap: 20px;
    margin-top: 20px;
    padding-top: 10px;
    justify-content: center;
    background-color: transparent;
    overflow-y: auto;
    height: 100%;
    max-height: calc(110vh - 100px); 
}

::-webkit-scrollbar {
    display: none;
}

.cart-container {
    flex: 1; 
    background-color: transparent; 
    overflow-y: auto;
    height: 100vh;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.order-summary {
    height: 60vh;
    background-color: white;
    padding: 20px 20px;
    border-bottom: 1px solid #34495e;
    overflow-y: auto; 
}

.payment-info {
    height: 40vh;
    background-color: #ddd;
    padding: 20px 20px;
    border-radius: 20px;
    border-bottom: 1px solid #34495e;
}

.cart-title {
    font-size: 24px;
    color: #333;
    font-weight: bold;
    margin-top: 10px;
    margin-left: 10px;
}

.cart-item {
    display: flex;
    align-items: center;
    margin: 10px 0;
    padding: 10px;
    border-radius: 8px;
}

.cart-img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    margin-right: 20px;
    border-radius: 8px;
}

.cart-details {
    flex-grow: 1; 
}

.cart-prodname {
    margin: 0;
    font-size: 18px;
    font-weight: bold;
}

.cart-price {
    margin: 5px 0;
    font-size: 16px;
    color: #777;
}

.cart-footer {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 20px;
    background-color: #f9f9f9;
    border-top: 1px solid #ddd;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.remove-btn {
    background: transparent;
    color: red;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
}

.remove-btn:hover {
    background: transparent;
    color: darkred;
}

.total-price {
    font-size: 18px;
    font-weight: bold;
    color: #333;
}

.place-order-btn {
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    color: white;
    background-color: #f095a8;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.place-order-btn:hover {
    transform: translateY(-1px);
	box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}


.fielddata-item {
	display: flex;
	flex-direction: column;
	align-items: center;
	background-color: #ffffff;
	border: 1px solid #ddd;
	border-radius: 10px;
	width: calc(20% - 30px); /* 4 items per row with 20px gap */
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
	transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.fielddata-item:hover {
	transform: translateY(-10px);
	box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.fielddata-details {
	text-align: center;
	background: transparent;
	padding: 10px;
}

.fielddata-prodname {
	font-size: 1rem;
    font-weight: bold;
	color: #333;
}

.fielddata-item img {
	width: 100px;
	height: 100px;
	object-fit: cover;
	border-radius: 10px;
	margin-bottom: 15px;
	transition: transform 0.2s ease;
}

</style>

</style>
</head>
  <body>
  
  <div class="sidebar">
  <a class="logo" href="homepagecashier.php">
    <img src="images/logopic.png" alt="Logo">
  </a>

  <div class="side-wrapper">
   <div class="side-title">CATEGORY</div>
   <div class="side-menu">
    <a class="sidebar-link" href="homepagecashier.php">
     <i class="bi bi-house-door icon"></i>
     Overview
    </a>
    <a class="sidebar-link is-active" href="menu-products.php">
    <i class="bi bi-cart icon"></i>
     Our Products
    </a>
    <a class="sidebar-link" href="orderform.php">
     <i class="bi bi-receipt icon"></i>
     Order Form
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

 

  <form action="menu-products.php" method="post" class="search-input"></form>

  <div class="content-container">
        <div class="product-container anim" style="--delay: .3s">

       <?php
include "dbconnect.php";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id']) && isset($_POST['quantity']) && isset($_POST['payment_method'])) {
    $productIds = $_POST['product_id'];
    $quantities = $_POST['quantity'];
    $paymentMethod = $_POST['payment_method'];
    $salesDate = date('Y-m-d');
    $totalAmount = 0;

    // Start transaction
    $conn->begin_transaction();

    try {
        // Calculate the total amount and update inventory
        for ($i = 0; $i < count($productIds); $i++) {
            $productId = $productIds[$i];
            $quantity = $quantities[$i];

            // Fetch the product price and quantity available from the database
            $productSql = "SELECT price, quantity_available FROM product_table WHERE product_id = '$productId'";
            $productResult = $conn->query($productSql);
            if ($productResult->num_rows > 0) {
                $productRow = $productResult->fetch_assoc();
                $price = $productRow['price'];
                $quantityAvailable = $productRow['quantity_available'];

                if ($quantity > $quantityAvailable) {
                    throw new Exception("Insufficient stock for product ID: $productId");
                }

                $totalAmount += $price * $quantity;

                // Update the product quantity
                $newQuantityAvailable = $quantityAvailable - $quantity;
                $status = ($newQuantityAvailable > 0) ? 'available' : 'unavailable';
                $updateProductSql = "UPDATE product_table SET quantity_available = '$newQuantityAvailable', status = '$status' WHERE product_id = '$productId'";
                if ($conn->query($updateProductSql) !== TRUE) {
                    throw new Exception("Error updating product inventory: " . $conn->error);
                }
            } else {
                throw new Exception("Error fetching product details for product ID: $productId");
            }
        }

        // Insert into sales_table
        $salesSql = "INSERT INTO sales_table (total_amount, payment_method, sales_date) VALUES ('$totalAmount', '$paymentMethod', NOW())";

        
        if ($conn->query($salesSql) === TRUE) {
            // Get the last inserted sales_id
            $salesId = $conn->insert_id;

            $insertResult = $conn->query($salesSql);
            
            // Insert into transaction_table
            for ($i = 0; $i < count($productIds); $i++) {
                $productId = $productIds[$i];
                $quantity = $quantities[$i];

                $detailsSql = "INSERT INTO transaction_table (product_id, quantity_sold, transaction_date) VALUES ('$productId', '$quantity',  NOW())";
                if ($conn->query($detailsSql) !== TRUE) {
                    throw new Exception("Error inserting transaction details: " . $conn->error);
                }
            }

            // Commit transaction
            $conn->commit();
            echo "Order placed successfully!";
        } else {
            throw new Exception("Error inserting sales record: " . $conn->error);
        }
    } catch (Exception $e) {
        // Rollback transaction on error
        $conn->rollback();
        echo $e->getMessage();
    }
}

// Fetch product data, excluding products with zero quantity
$selectsql = "SELECT * FROM product_table WHERE quantity_available > 0";
if (isset($_POST['search']) && !empty($_POST['search'])) {
    $searchinput = mysqli_real_escape_string($conn, $_POST['search']);
    $selectsql = "SELECT * FROM product_table WHERE (product_id LIKE '%$searchinput%' OR product_name LIKE '%$searchinput%' OR description LIKE '%$searchinput%') AND quantity_available > 0";
}

$result = $conn->query($selectsql);
?>

<form action="menu-products.php" method="post" class="search-input">
    <div class="content-container">
        <div class="product-container anim" style="--delay: .3s">
            <?php
            if ($result->num_rows > 0) {
                foreach ($result as $fielddata) {
                    ?>
                    <div class="fielddata-item" data-product-id="<?php echo $fielddata['product_id']; ?>" data-product-name="<?php echo $fielddata['product_name']; ?>" data-product-price="<?php echo $fielddata['price']; ?>" data-product-img="<?php echo $fielddata['img']; ?>">
                        <div class="fielddata-details">
                            <img src="<?php echo $fielddata['img']; ?>" alt="Product Image" style="object-fit: cover;">
                            <h2 class="fielddata-prodname"><?php echo $fielddata['product_name'] ?></h2>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "No records found";
            }
            ?>


        </div>

        <div class="cart-container">
            <div class="order-summary">
                <p class="cart-title">Order Summary</p>
                <div class="cart-items"></div>
            </div>
            <div class="payment-info">
                <div class="payment-method">
                    <label for="payment_method">Select Payment Method:</label>
                    <select id="payment_method" name="payment_method">
                        <option value="cash">Cash</option>
                        <option value="gcash">GCash</option>
                    </select>
                </div>
                <div class="total-price">Total Price: PHP 0</div>
                <input type="hidden" name="total_amount" id="total_amount" value="0">
                <button type="submit" class="place-order-btn">Place Order</button>
            </div>
        </div>
    </div>
</form>

</div> <!-- MAIN CONTAINER CLOSE -->


         </section>

         <script src='script.js'></script>

         <script>
     document.addEventListener('DOMContentLoaded', () => {
    const productItems = document.querySelectorAll('.fielddata-item');
    const orderSummary = document.querySelector('.order-summary .cart-items');
    const totalPriceElement = document.querySelector('.total-price');
    const totalAmountInput = document.getElementById('total_amount');

    productItems.forEach(item => {
        item.addEventListener('click', () => {
            const productId = item.getAttribute('data-product-id');
            const productName = item.getAttribute('data-product-name');
            const productPrice = parseFloat(item.getAttribute('data-product-price'));
            const productImg = item.getAttribute('data-product-img');

            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');

            cartItem.innerHTML = `
                <img src="${productImg}" alt="Product Image" class="cart-img">
                <div class="cart-details">
                    <h3 class="cart-prodname">${productName}</h3>
                    <p class="cart-price">${productPrice.toFixed(2)}</p>
                    <div class="quantity-controls">
                        <button type="button" class="decrement-btn">-</button>
                        <span class="quantity">1</span>
                        <button type="button" class="increment-btn">+</button>
                    </div>
                    <input type="hidden" class="cart-product-id" name="product_id[]" value="${productId}">
                    <input type="hidden" class="cart-product-price" name="product_price[]" value="${productPrice}">
                    <input type="hidden" class="cart-quantity" name="quantity[]" value="1">
                </div>
                <button type="button" class="remove-btn"><i class="bi bi-trash"></i></button>
            `;

            orderSummary.appendChild(cartItem);
            updateTotalPrice();

            cartItem.querySelector('.remove-btn').addEventListener('click', () => {
                cartItem.remove();
                updateTotalPrice();
            });

            cartItem.querySelector('.increment-btn').addEventListener('click', () => {
                const quantityElement = cartItem.querySelector('.quantity');
                const quantityInput = cartItem.querySelector('.cart-quantity');
                quantityElement.textContent = parseInt(quantityElement.textContent) + 1;
                quantityInput.value = quantityElement.textContent;
                updateTotalPrice();
            });

            cartItem.querySelector('.decrement-btn').addEventListener('click', () => {
                const quantityElement = cartItem.querySelector('.quantity');
                const quantityInput = cartItem.querySelector('.cart-quantity');
                if (parseInt(quantityElement.textContent) > 1) {
                    quantityElement.textContent = parseInt(quantityElement.textContent) - 1;
                    quantityInput.value = quantityElement.textContent;
                    updateTotalPrice();
                }
            });
        });
    });

    function updateTotalPrice() {
        let totalPrice = 0;
        document.querySelectorAll('.cart-item').forEach(cartItem => {
            const quantity = parseInt(cartItem.querySelector('.quantity').textContent);
            const price = parseFloat(cartItem.querySelector('.cart-price').textContent);
            totalPrice += quantity * price;
        });
        totalPriceElement.textContent = `Total Price: PHP ${totalPrice.toFixed(2)}`;
        totalAmountInput.value = totalPrice.toFixed(2);
    }
});


          </script>

  </main>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
 
</html>
