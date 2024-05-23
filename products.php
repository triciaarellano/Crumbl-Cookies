<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accounts</title>
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
	background-color: #0000000b;
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

tbody tr.hide td img {
	width: 0;
	height: 0;
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
    <a class="sidebar-link" href="dashboard.php">
     <i class="bi bi-house-door icon"></i>
     Overview
    </a>
    <a class="sidebar-link" href="accounts.php">
     <i class="bi bi-people"></i>
     Accounts
    </a>
    <a class="sidebar-link is-active" href="products.php">
     <i class="bi bi-cart icon"></i>
     Products
    </a>
    <a class="sidebar-link" href="archives.php">
     <i class="bi bi-bookmark"></i>
     Archives
    </a>
    <a class="sidebar-link" href="inventory.php">
     <i class="bi bi-box-seam icon"></i>
     Inventory
    </a>
	<a class="sidebar-link" href="transactions.php">
     <i class="bi bi-receipt"></i>
     Transactions
    </a>
    <a class="sidebar-link" href="salesrecord.php">
     <i class="bi bi-journal icon"></i>
     Sales Record
    </a>
    <a class="sidebar-link" href="audittrail.php">
     <i class="bi bi-bar-chart icon"></i>
     Audit Trail
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
   <div class="main-header anim" style="--delay: 0s">Products</div>
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
                        <input type="file" class="form-control" id="upload_img" name="upload_img" accept="image/*" onchange="previewImg(event)">
                        <img src="" alt="" id="preview_img" width="200" height="200">
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

      <form action="products.php" method="post" class="search-form1"></form>


      <?php
include "dbconnect.php";


$selectsql = "SELECT * FROM inven_sales";


// Check if the search input is clicked and not null, change $selectsql syntax
if(isset($_POST['search']) && $_POST['search'] != NULL){
  $searchinput = $_POST['search'];
  $selectsql = "SELECT * FROM product_table WHERE product_id LIKE '%$searchinput%' OR product_name LIKE '%$searchinput%' OR description LIKE '%$searchinput%'"; //cHANGE PA
} else {
  $selectsql = "SELECT * FROM product_table";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate and sanitize inputs
  $productname = mysqli_real_escape_string($conn, $_POST['product_name']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $price = mysqli_real_escape_string($conn, $_POST['price']);
  $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
  
  // Upload image
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["upload_img"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["upload_img"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }



  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["upload_img"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["upload_img"]["name"])). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }

  // Insert product into database
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
      echo "Error: " . $insertsql . "<br>" . mysqli_error($conn);
  }
}


$result = $conn->query($selectsql);


// Check if table is not empty
if ($result->num_rows > 0) {
  echo "<main class='table anim' style='--delay: .4s' id='user_table'>";
  echo "<section class='table__header anim' style='--delay: .2s'>";
  echo "<div class='input-group'>";
  echo "<input type='search' name='search' class='search-input' placeholder='Search Data'>";
  echo "</div>";
  echo "<button type='button' class='btn btn-pink bi bi-plus' data-bs-toggle='modal' data-bs-target='#pinkModal'> Add Product</button>";
  echo "<button id='refreshButton' class='btn-refresh'><i class='bi bi-arrow-clockwise'></i></button>";
  echo "</section>";

  echo "<div class='container'>";
  foreach ($result as $fielddata) {
      ?>      
      <div class="fielddata-item">
          <div class="fielddata-details">
              <img src="<?php echo $fielddata['img']; ?>" alt="Product Image" style="width: 200px; height: 200px; object-fit: cover;">
              <h2 class="fielddata-prodname"><?php echo $fielddata['product_name'] ?></h2>
              <p class="fielddata-desc"><?php echo $fielddata['description'] ?></p>
          </div>
      </div>
      <?php
  }
  echo "</div>";
  echo "</main>";
} else {
  echo "No records found";
}
?>

         </section>

         <script src='script.js'></script>

         <script>
         document.addEventListener("DOMContentLoaded", function() {

const userSettings = document.querySelector('.user-settings');
const dropdownMenu = document.querySelector('.dropdown-menu');
  
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
 
</html>