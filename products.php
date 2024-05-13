<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!----======== CSS ======== -->
  <link rel="stylesheet" href="style.css">

  <!----===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body>

  <nav class="sidebar close">
    <header>

    <div class="image-text">
        <span class="image">
          <img src="logoonly.png" alt="">
        </span>
        
      <div class="text logo-text">
          <span class="name">Crumbl Cookies</span>
          <span class="profession">Admin</span>
        </div>
      </div>

      <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
      <div class="menu">

        <ul class="menu-links">
          <li class="nav-link">
            <a href="admin-overview.php">
              <i class='bx bx-home-alt icon'></i>
              <span class="text nav-text">Overview</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="accounts.php">
              <i class='bx bx-user icon'></i>
              <span class="text nav-text">Accounts</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="products.php">
              <i class='bx bx-cart icon'></i>
              <span class="text nav-text">Products</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="archives.php">
              <i class='bx bx-book-bookmark icon'></i>
              <span class="text nav-text">Archives</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="inventory.php">
              <i class='bx bx-cube icon'></i>
              <span class="text nav-text">Inventory</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="transactions.php">
              <i class='bx bx-wallet icon'></i>
              <span class="text nav-text">Transactions</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="salesrecord.php">
              <i class='bx bx-cabinet icon'></i>
              <span class="text nav-text">Sales Record</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="audittrail.php">
              <i class='bx bx-bar-chart-alt-2 icon'></i>
              <span class="text nav-text">Audit Trail</span>
            </a>
          </li>

        </ul>
      </div>

      <div class="bottom-content">
        <li class="">
          <a href="#">
            <i class='bx bx-log-out icon'></i>
            <span class="text nav-text">Logout</span>
          </a>
        </li>

        <li class="mode">
          <div class="sun-moon">
            <i class='bx bx-moon icon moon'></i>
            <i class='bx bx-sun icon sun'></i>
          </div>
          <span class="mode-text text">Dark mode</span>

          <div class="toggle-switch">
            <span class="switch"></span>
          </div>
        </li>

      </div>
    </div>

  </nav>

  <section class="home">
  <div class="dashboard-divider"></div>
  <div class="text">

  <div class="mainbar-text">Products</div>
  
    <form action="products.php" method="post" class="search-form">
      
    <!-- <div class="search-box">
        <input type="text" name="search" class="search-input" placeholder="Search...">
        <button type="submit" class="search-button"><i class="bx bx-search" style = "font-size: 24px; margin-top: 5px;"></i></button>
    </div> -->

    </form>

    
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
  // Retrieve form data
  $product_name = $_POST['product_name'];
  $description = $_POST['description'];
  $img = "images/";
  
  // Insert data into database
  $insert_sql = "INSERT INTO product_table (product_name, description, img) VALUES ('$product_name', '$description', '$img')";
  
  if ($conn->query($insert_sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $insert_sql . "<br>" . $conn->error;
  }
  
  // Close the database connection
  $conn->close();
}

$result = $conn->query($selectsql);

// Check if table is not empty
if ($result->num_rows > 0) {
    echo "<div class='container'>";
    foreach ($result as $fielddata) {
        ?>      
        <div class="fielddata-item">
            <div class="row">
                <div class="col">
                    <div class="fielddata-details">

                        <h2 class="fielddata-prodname"><?php echo $fielddata['product_name'] ?></h2>
                        <p class="fielddata-desc"><?php echo $fielddata['description'] ?></p>

                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    echo "</div>"; 
} else {
    echo "No records found";
}
?>


</section>

  <script>
document.addEventListener("DOMContentLoaded", function() {
  const body = document.querySelector('body');
  const sidebar = document.querySelector('nav');
  const toggle = document.querySelector(".toggle");
  const modeSwitch = document.querySelector(".toggle-switch");
  const modeText = document.querySelector(".mode-text");
  const viewButtons = document.querySelectorAll(".btn-primary");


  toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
  });

  modeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");
    if (body.classList.contains("dark")) {
      modeText.innerText = "Light mode";
    } else {
      modeText.innerText = "Dark mode";
    }
  });
});


  </script>

</body>

</html>