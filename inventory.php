<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
          <a href="logout.php">
            <i class='bx bx-log-out icon'>
            
            </i>
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

    <div class="mainbar-text">Inventory</div>

      <form action="inventory.php" method="post" class="search-form1"></form>


 <?php
      include "dbconnect.php";

      $selectsql = "SELECT * FROM inven_sales";

      // Check if the search input is clicked and not null, change $selectsql syntax
      if (isset($_POST['search']) && $_POST['search'] != NULL) {
        $searchinput = $_POST['search'];
        $selectsql = "SELECT * FROM product_table WHERE product_id LIKE '%$searchinput%' OR product_name LIKE '%$searchinput%' OR description LIKE '%$searchinput%' OR price LIKE '%$searchinput%'"; //cHANGE PA 
      } else {
        $selectsql = "SELECT * FROM product_table";
      }

      $result = $conn->query($selectsql);

      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
        include "dbconnect.php";
    
        if(isset($_POST['product_id'])) {
            $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
            
            $delete_query = "DELETE FROM product_table WHERE product_id = '$product_id'";
            if(mysqli_query($conn, $delete_query)) {
                echo "<script>
                  Swal.fire({
                      title: 'Deleted!',
                      text: 'Your file has been deleted!',
                      icon: 'success'
                      });
                  </script>";

            } else {
                echo "Error deleting record: " . mysqli_error($conn);
            }
        }
    }
    
    
     // Check if table is not empty
    if ($result->num_rows > 0) {
    echo "<main class='table' id='product_table'>";
    echo "<section class='table__header'>";
    
             echo "<div class='input-group'>";
                 echo "<input type='search' name='search' class='search-input' placeholder='Search Data'>";
             echo "</div>";
             echo "<button id='refreshButton' class='btn-refresh'><i class='bx bx-refresh' style='color: #fff; font-family: Montserrat; font-size: 24px;'></i> Refresh</button>";
        echo "</section>";
         echo "<section class='table__body'>";
             echo "<table>";
                 echo "<thead>";
                     echo "<tr>";
                     echo "<th>Product ID <span class='icon-arrow'>&UpArrow;</span></th>";
                     echo "<th>Product Name <span class='icon-arrow'>&UpArrow;</span></th>";
                     echo "<th>Description <span class='icon-arrow'>&UpArrow;</span></th>";
                     echo "<th>Price <span class='icon-arrow'>&UpArrow;</span></th>";
                     echo "<th>Quantity <span class='icon-arrow'>&UpArrow;</span></th>";
                     echo "<th>Action</th>";
                    echo "</tr>";
                 echo "</thead>";
                 echo "<tbody>";
                 foreach ($result as $fielddata) {
                    echo "<tr>";
                    echo "<td>" . $fielddata['product_id'] . "</td>";
                    echo "<td>" . $fielddata['product_name'] . "</td>";
                    echo "<td>" . $fielddata['description'] . "</td>";
                    echo "<td>" . $fielddata['price'] . "</td>";
                    echo "<td>" . $fielddata['quantity_available'] . "</td>";

                    echo "<td>";
                    echo "<form action='' method='post'>";
                    echo "<input type='hidden' name='product_id' value='" . $fielddata['product_id'] . "'>";
                    echo "<button type='submit' name='delete' class='btn-delete btn-primary'>Delete</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }

                
                echo "</tbody>";
                echo "</table>";

              } else {
                echo "No records found";
              }
              ?>

         </section>

         <script src='script.js'></script>

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

              document.getElementById('refreshButton').addEventListener('click', function() {
                location.reload();
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
  </main>
 
</body>
 
</html>