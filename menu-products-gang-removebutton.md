# menu-products-gang-removebutton

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
    overflow: scroll;
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
  gap: 20px; /* Adjust the gap as needed */
  height: 100%; /* Ensures the container takes full height of its parent */
}

.product-container {
    display: flex;
    flex-wrap: wrap;
    flex: 3; /* Adjust the flex value as needed */
    gap: 20px;
    margin-top: 50px;
    padding-top: 10px;
    justify-content: center;
    background-color: transparent;
    overflow-y: auto;
    max-height: calc(100vh - 100px); 
}

.cart-container {
  flex: 1; 
  background-color: white; 
  overflow-y: auto;
  height: auto;
  border: 1px solid #ddd;
	border-radius: 10px;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
	transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.cart-title {
    font-size: 30px;
	 color: #333;
	 font-weight: 400;
     margin-top: 20px;
	 margin-left: 20px;
	 position: absolute;
}

.cart-item {
            display: flex;
            align-items: center;
            margin: 10px 0;
            position: relative;
        }
        .cart-img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin-right: 10px;
        }
        .cart-details {
            display: flex;
            flex-direction: column;
        }
        .cart-prodname {
            margin: 0;
            font-size: 16px;
        }
        .cart-price {
            margin: 0;
            font-size: 14px;
            color: grey;
        }
        .remove-btn {
            position: absolute;
            right: 10px;
            top: 10px;
            background-color: red;
            color: white;
            border: none;
            padding: 5px;
            cursor: pointer;
        }
        .total-price {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
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
  <div class="main-header anim" style="--delay: 0s">MENU</div>

  <form action="products.php" method="post" class="search-input"></form>

  <div class="content-container">
        <div class="product-container anim" style="--delay: .3s">
            <?php
            include "dbconnect.php";

            $selectsql = "SELECT * FROM product_table";
            if (isset($_POST['search']) && !empty($_POST['search'])) {
                $searchinput = mysqli_real_escape_string($conn, $_POST['search']);
                $selectsql = "SELECT * FROM product_table WHERE product_id LIKE '%$searchinput%' OR product_name LIKE '%$searchinput%' OR description LIKE '%$searchinput%'";
            }

            $result = $conn->query($selectsql);

            // Check if table is not empty
            if ($result->num_rows > 0) {
                foreach ($result as $fielddata) {
                    ?>
                    <div class="fielddata-item" data-product-name="<?php echo $fielddata['product_name']; ?>" data-product-price="<?php echo $fielddata['price']; ?>" data-product-img="<?php echo $fielddata['img']; ?>">
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
            <p class="cart-title">ORDER LIST</p>
            <div class="total-price">Total Price: PHP0</div>
        </div>
    </div>

</div> <!-- MAIN CONTAINER CLOSE -->

         </section>

         <script src='script.js'></script>

         <script>
        document.addEventListener('DOMContentLoaded', () => {
            const productItems = document.querySelectorAll('.fielddata-item');
            const cartContainer = document.querySelector('.cart-container');
            const totalPriceElement = document.querySelector('.total-price');

            productItems.forEach(item => {
                item.addEventListener('click', () => {
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
                        </div>
                        <button class="remove-btn">Remove</button>
                    `;

                    cartContainer.appendChild(cartItem);
                    updateTotalPrice();

                    cartItem.querySelector('.remove-btn').addEventListener('click', () => {
                        cartItem.remove();
                        updateTotalPrice();
                    });
                });
            });

            function updateTotalPrice() {
                let totalPrice = 0;
                document.querySelectorAll('.cart-price').forEach(priceElement => {
                    totalPrice += parseFloat(priceElement.textContent);
                });
                totalPriceElement.textContent = `Total Price: PHP ${totalPrice.toFixed(2)}`;
            }

            const search = document.querySelector(".search-input");
            const productContainer = document.querySelector(".product-container");
            const productItemsList = productContainer.querySelectorAll(".fielddata-item");

            search.addEventListener("input", searchProducts);

            function searchProducts() {
                const searchValue = search.value.toLowerCase();
                productItemsList.forEach(item => {
                    const text = item.textContent.toLowerCase();
                    item.style.display = text.includes(searchValue) ? '' : 'none';
                });
            }

            const userSettings = document.querySelector('.user-settings');
            const dropdownMenu = document.querySelector('.dropdown-menu');

            userSettings.addEventListener('click', function() {
                dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
            });

            window.addEventListener('click', function(event) {
                if (!userSettings.contains(event.target)) {
                    dropdownMenu.style.display = 'none';
                }
            });

            function handleSidebarLinkClick(event) {
                document.querySelectorAll(".sidebar-link").forEach(function(link) {
                    link.classList.remove("is-active");
                });
                event.target.classList.add("is-active");
            }

            document.querySelectorAll(".sidebar-link").forEach(function(link) {
                link.addEventListener("click", handleSidebarLinkClick);
            });

            function handleWindowResize() {
                if (window.innerWidth > 1090) {
                    document.querySelector(".sidebar").classList.remove("collapse");
                } else {
                    document.querySelector(".sidebar").classList.add("collapse");
                }
            }

            window.addEventListener("resize", handleWindowResize);
            handleWindowResize();

            function handleLogoClick() {
                document.querySelector(".main-container").classList.remove("show");
                document.querySelector(".main-container").scrollTop = 0;
            }

            document.querySelectorAll(".logo, .logo-expand, .sidebar-link").forEach(function(element) {
                element.addEventListener("click", handleLogoClick);
            });

            document.getElementById('refreshButton').addEventListener('click', function() {
                location.reload();
            });

            // preview image
            function previewImg(event) {
                var display = document.getElementById("preview_img");
                display.src = URL.createObjectURL(event.target.files[0]);
            }
        });

          </script>

  </main>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
 
</html>
