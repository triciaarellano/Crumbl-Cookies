<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" rel="stylesheet">
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

      <i class="bi bi-chevron-right toggle"></i>
    </header>

    <div class="menu-bar">
      <div class="menu">

        <ul class="menu-links">
          <li class="nav-link">
            <a href="admin-overview.php">
              <i class="bi bi-house-door icon"></i>
              <span class="text nav-text">Overview</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="accounts.php">
              <i class="bi bi-person icon"></i>
              <span class="text nav-text">Accounts</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="products.php">
              <i class="bi bi-cart icon"></i>
              <span class="text nav-text">Products</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="archives.php">
              <i class="bi bi-bookmark icon"></i>
              <span class="text nav-text">Archives</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="inventory.php">
              <i class="bi bi-box-seam icon"></i>
              <span class="text nav-text">Inventory</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="transactions.php">
              <i class="bi bi-wallet icon"></i>
              <span class="text nav-text">Transactions</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="salesrecord.php">
              <i class="bi bi-journal icon"></i>
              <span class="text nav-text">Sales Record</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="audittrail.php">
              <i class="bi bi-bar-chart icon"></i>
              <span class="text nav-text">Audit Trail</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="bottom-content">
        <li>
          <a href="logout.php">
            <i class="bi bi-box-arrow-right icon"></i>
            <span class="text nav-text">Logout</span>
          </a>
        </li>

        <li class="mode">
          <div class="sun-moon">
            <i class="bi bi-moon icon moon"></i>
            <i class="bi bi-sun icon sun"></i>
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

      <div class="mainbar-text">Sales Record</div>

      <form action="salesrecord.php" method="post" class="search-form1"></form>

      <?php
      include "dbconnect.php";

      $selectsql = "SELECT * FROM inven_sales";

      // Check if the search input is clicked and not null, change $selectsql syntax
      if (isset($_POST['search']) && $_POST['search'] != NULL) {
        $searchinput = $_POST['search'];
        $selectsql = "SELECT * FROM sales_table WHERE sales_id LIKE '%$searchinput%' OR transaction_id LIKE '%$searchinput%' OR total_amount LIKE '%$searchinput%' OR payment_method LIKE '%$searchinput%' OR sales_date LIKE '%$searchinput%'"; //cHANGE PA 
      } else {
        $selectsql = "SELECT * FROM sales_table";
      }

      $result = $conn->query($selectsql);

      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
        include "dbconnect.php";

        if (isset($_POST['sales_id'])) {
          $sales_id = mysqli_real_escape_string($conn, $_POST['sales_id']);

          $delete_query = "DELETE FROM sales_table WHERE sales_id = '$sales_id'";
          if (mysqli_query($conn, $delete_query)) {
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
        echo "<main class='table' id='sales_table'>";
        echo "<section class='table__header'>";

        echo "<div class='input-group'>";
        echo "<input type='search' name='search' class='search-input' placeholder='Search Data'>";
        echo "</div>";
        echo "<button id='refreshButton' class='btn-refresh'><i class='bi bi-arrow-clockwise' style='color: #fff; font-family: Montserrat; font-size: 24px;'></i> Refresh</button>";
        echo "</section>";
        echo "<section class='table__body'>";
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Sales ID<span class='icon-arrow'>&UpArrow;</span></th>";
        echo "<th>Transaction ID<span class='icon-arrow'>&UpArrow;</span></th>";
        echo "<th>Total Amount<span class='icon-arrow'>&UpArrow;</span></th>";
        echo "<th>Payment Method<span class='icon-arrow'>&UpArrow;</span></th>";
        echo "<th>Sales Date<span class='icon-arrow'>&UpArrow;</span></th>";
        echo "<th>Action</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($result as $fielddata) {
          echo "<tr>";
          echo "<td>" . $fielddata['sales_id'] . "</td>";
          echo "<td>" . $fielddata['transaction_id'] . "</td>";
          echo "<td>" . $fielddata['total_amount'] . "</td>";
          echo "<td>" . $fielddata['payment_method'] . "</td>";
          echo "<td>" . $fielddata['sales_date'] . "</td>";

          echo "<td>";
          echo "<form action='' method='post'>";
          echo "<input type='hidden' name='sales_id' value='" . $fielddata['sales_id'] . "'>";
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
      document.addEventListener("DOMContentLoaded", function () {
        const body = document.querySelector('body');
        const sidebar = document.querySelector('nav');
        const toggle = document.querySelector(".toggle");
        const modeSwitch = document.querySelector(".toggle-switch");
        const modeText = document.querySelector(".mode-text");
        const viewButtons = document.querySelectorAll(".btn-primary");


        toggle.addEventListener("click", () => {
          sidebar.classList.toggle("close");
        });

        document.getElementById('refreshButton').addEventListener('click', function () {
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
