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


main.table {
	width: calc(100vw - 200px);
	max-width: 100%;
	width: 80vw;
	height: 85vh;
	margin-top: 30px;

	font-size: 16px;
	overflow: scroll;
}

.table__header {
	position: relative;
	width: 99%;
	height: 10%;
	display: flex;
	align-items: center;
  justify-content: flex-start;
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

/* -- CLOSE -- */
.modal-footer .btn-secondary {
  background-color: #ff5151;
  border-color: #f095a8;
}

.modal-footer .btn-primary {
  margin-right: -15px;
  border-color: transparent;
}

.btn-pink {
            background-color: #f095a8;
            width: 15%;
            margin-left: 40px;
            color: #eee;
            font-family: 'Poppins', sans-serif;
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
    display: flex;
    justify-content: flex-start; 
}

.btn-refresh i {
    background-color: transparent;
    border: none;
    color: #f095a8;
    font-family: '', sans-serif;
    font-size: 25px;
    line-height: 0;
    margin-top: 14px;
    margin-left: 12px;
}

.controls {
    display: flex;
    justify-content: flex-start;
    margin-top: 40px;
    margin-bottom: 20px;
    width: 80%;
    height: 50px;
}

.search-input {
   width: 45%;
	 border: none;
   margin-left: 40px;
	 background-color: #e4e4e4a9;
	 border-radius: 8px;
	 font-family: var(--body-font);
	 font-size: 14px;
	 font-weight: 500;
	 padding: 0 40px 0 16px;
	 box-shadow: 0 0 0 2px rgba(134, 140, 160, 0.02);
	 color: #ff6486;
}

.search-input:hover {

box-shadow: 0 0.1rem 0.4rem #0002;
}

.product-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding-top: 10px;
    justify-content: center;
    background-color: transparent;
    overflow-y: auto;
    max-height: calc(94.6vh - 200px); 
}

.fielddata-quantity {
    font-size: 1rem;
    font-weight: 500;
}

.fielddata-quantity .bi {
    margin-left: 5px;
    margin-bottom: 30px;
}

.available-status {
    color: green;
    font-weight: bold;
}

.unavailable-status {
    color: red;
    font-weight: bold;
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
    <a class="sidebar-link is-active" href="homepagecashier.php">
     <i class="bi bi-house-door icon"></i>
     Overview
    </a>
    <a class="sidebar-link" href="menu-products.php">
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
</div>

<div class="controls anim" style="--delay: .1s">
        <input type="search" name="search" class="search-input" placeholder="Search Products">
        <button type="button" class="btn btn-pink bi bi-plus" data-bs-toggle="modal" data-bs-target="#pinkModal"> Add Product</button>
        <button id="refreshButton" class="btn-refresh"><i class="bi bi-arrow-clockwise"></i></button>
    </div>

<!-- Modal Structure -->
<div class="modal fade" id="pinkModal" tabindex="-1" aria-labelledby="pinkModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="pinkModalLabel">Add Products</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form Inside Modal -->
                <form action="products.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="upload_img" class="form-label">Product Image</label>
                        <img src="" alt="" id="preview_img" width="200" height="200" class="img-upload">
                        <input type="file" class="form-control" id="upload_img" name="upload_img" accept="image/*" onchange="previewImg(event)">
                    </div>
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Product name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="col">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<form action="products.php" method="post" class="search-input"></form>

<div class="product-container anim" style="--delay: .3s">
    <?php
    include "dbconnect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize inputs
        $productid = isset($_POST['product_id']) ? mysqli_real_escape_string($conn, $_POST['product_id']) : '';
        $productname = isset($_POST['product_name']) ? mysqli_real_escape_string($conn, $_POST['product_name']) : '';
        $description = isset($_POST['description']) ? mysqli_real_escape_string($conn, $_POST['description']) : '';
        $price = isset($_POST['price']) ? mysqli_real_escape_string($conn, $_POST['price']) : '';
        $quantity = isset($_POST['quantity']) ? mysqli_real_escape_string($conn, $_POST['quantity']) : '';

        // Handle file upload
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["upload_img"]["name"] ?? '');
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $maxFileSize = 5 * 1024 * 1024; // 5MB

        // Check if image file is a actual image or fake image
        if (isset($_FILES["upload_img"]) && $_FILES["upload_img"]["tmp_name"]) {
            $check = getimagesize($_FILES["upload_img"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check file size
        if (isset($_FILES["upload_img"]) && $_FILES["upload_img"]["size"] > $maxFileSize) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType && !in_array($imageFileType, ["jpg", "png", "jpeg", "gif"])) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (isset($_FILES["upload_img"]) && move_uploaded_file($_FILES["upload_img"]["tmp_name"], $target_file)) {
                $insertsql = "INSERT INTO product_table (product_name, description, price, quantity_available, img) VALUES ('$productname', '$description', '$price', '$quantity', '$target_file')";
                if (mysqli_query($conn, $insertsql)) {
                    echo "<script>
                        Swal.fire({
                            title: 'Success!',
                            text: 'Product has been added successfully!',
                            icon: 'success'
                        });
                    </script>";
                } else {
                  echo "<script>
                  Swal.fire({
                      title: 'Error!',
                      text: 'Failed to add the product!',
                      icon: 'error'
                  });
              </script>";
                }
            } else {

            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_submit'])) {
        $editproduct_id = isset($_POST['edit_product_id']) ? mysqli_real_escape_string($conn, $_POST['edit_product_id']) : '';
        $editproductname = isset($_POST['edit_productname']) ? mysqli_real_escape_string($conn, $_POST['edit_productname']) : '';
        $editdescription = isset($_POST['edit_description']) ? mysqli_real_escape_string($conn, $_POST['edit_description']) : '';
        $editprice = isset($_POST['edit_price']) ? mysqli_real_escape_string($conn, $_POST['edit_price']) : '';
        $editquantity = isset($_POST['edit_quantity']) ? mysqli_real_escape_string($conn, $_POST['edit_quantity']) : '';
        $editstatus = getProductStatus($editquantity);

        if ($editproduct_id && $editproductname && $editdescription && $editprice && $editquantity) {
            $update_query = "UPDATE product_table SET product_name = '$editproductname', description = '$editdescription', price = '$editprice', quantity_available = '$editquantity', status = '$editstatus' WHERE product_id = '$editproduct_id'";
            if (mysqli_query($conn, $update_query)) {
                echo "<script>
                    Swal.fire({
                        title: 'Updated!',
                        text: 'Product information has been updated!',
                        icon: 'success'
                    });
                </script>";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    }

    $selectsql = "SELECT * FROM product_table";
    if (isset($_POST['search']) && !empty($_POST['search'])) {
        $searchinput = mysqli_real_escape_string($conn, $_POST['search']);
        $selectsql = "SELECT * FROM product_table WHERE product_id LIKE '%$searchinput%' OR product_name LIKE '%$searchinput%' OR description LIKE '%$searchinput%'";
    }

    $result = $conn->query($selectsql);

    // Function to determine stock status
    function getStockStatus($quantity) {
        return $quantity < 5 ? '<i class="bi bi-exclamation-circle text-danger" title="Low Stock"></i>' : '';
    }

    function getProductStatus($quantity) {
        return $quantity > 0 ? 'Available' : 'Unavailable';
    }

    // Check if table is not empty
    if ($result->num_rows > 0) {
        foreach ($result as $fielddata) {
            ?>
            <div class="fielddata-item">
                <div class="fielddata-details">
                    <img src="<?php echo $fielddata['img']; ?>" alt="Product Image" style="width: 200px; height: 200px; object-fit: cover;">
                    <h2 class="fielddata-prodname"><?php echo $fielddata['product_name'] ?></h2>
                    <p class="fielddata-desc"><?php echo $fielddata['description'] ?></p>
                    <p class="fielddata-quantity">Quantity: <?php echo $fielddata['quantity_available'] ?> <?php echo getStockStatus($fielddata['quantity_available']); ?></p>
                    <p class="<?php echo $fielddata['quantity_available'] > 0 ? 'available-status' : 'unavailable-status'; ?>">
                        <?php echo getProductStatus($fielddata['quantity_available']); ?>
                    </p>
                   
                    <div id="collapse_<?php echo $fielddata['product_id']; ?>" class="collapse">
                        
                    </div>
                </div>
            </div>

            <?php
        }
    } else {
        echo "No records found";
    }
    ?>

</div>

         </section>

         <script src='script.js'></script>

         <script>
         document.addEventListener("DOMContentLoaded", function() {

const userSettings = document.querySelector('.user-settings');
const dropdownMenu = document.querySelector('.dropdown-menu');
const search = document.querySelector(".search-input"),
productContainer = document.querySelector(".product-container"),
productItems = productContainer.querySelectorAll(".fielddata-item");

        search.addEventListener("input", searchProducts);

        function searchProducts() {
            const searchValue = search.value.toLowerCase();
            productItems.forEach(item => {
                const text = item.textContent.toLowerCase();
                item.style.display = text.includes(searchValue) ? '' : 'none';
            });
        }

userSettings.addEventListener('click', function() {
dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
});

// Close the dropdown if the user clicks outside of it
window.addEventListener('click', function(event) {
if (!userSettings.contains(event.target)) {
dropdownMenu.style.display = 'none';
}
});

// to handle sidebar link click
function handleSidebarLinkClick(event) {
// remove 'is-active' class from all sidebar links
document.querySelectorAll(".sidebar-link").forEach(function(link) {
link.classList.remove("is-active");
});
// add 'is-active' class to the clicked sidebar link
event.target.classList.add("is-active");
}

// add click event listeners to all sidebar links
document.querySelectorAll(".sidebar-link").forEach(function(link) {
link.addEventListener("click", handleSidebarLinkClick);
});

// to handle window resize
function handleWindowResize() {
// If window width is greater than 1090px
if (window.innerWidth > 1090) {
// remove 'collapse' class from sidebar
document.querySelector(".sidebar").classList.remove("collapse");
} else {
// add 'collapse' class to sidebar
document.querySelector(".sidebar").classList.add("collapse");
}
}

window.addEventListener("resize", handleWindowResize);
handleWindowResize();

// to handle logo, logo-expand, and overview click
function handleLogoClick() {
// remove 'show' class from main container
document.querySelector(".main-container").classList.remove("show");
// scroll main container to top
document.querySelector(".main-container").scrollTop = 0;
}

// add click event listeners to logo, logo-expand, and overview
document.querySelectorAll(".logo, .logo-expand, .sidebar-link").forEach(function(element) {
element.addEventListener("click", handleLogoClick);
});

});

document.getElementById('refreshButton').addEventListener('click', function() {
location.reload();
});

//preview image
function previewImg(event){
var display = document.getElementById("preview_img");
display.src = URL.createObjectURL(event.target.files[0]);
}

          </script>

  </main>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
 
</html>
