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

    <div class="mainbar-text">Accounts</div>

      <form action="accounts.php" method="post" class="search-form1"></form>


      <?php
include "dbconnect.php";

// Default SQL query to fetch only active users
$selectsql = "SELECT * FROM user_table WHERE status = 'active'";

// Check if the search input is clicked and not null, change $selectsql syntax
if (isset($_POST['search']) && $_POST['search'] != NULL) {
    $searchinput = mysqli_real_escape_string($conn, $_POST['search']);
    $selectsql = "SELECT * FROM user_table WHERE status = 'active' AND (user_id LIKE '%$searchinput%' OR full_name LIKE '%$searchinput%' OR email LIKE '%$searchinput%')";
}

$result = $conn->query($selectsql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete'])) {
        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $delete_query = "UPDATE user_table SET status = 'inactive' WHERE user_id = '$user_id'";
        if (mysqli_query($conn, $delete_query)) {
            echo "<script>
                Swal.fire({
                    title: 'Deleted!',
                    text: 'User has been set to inactive!',
                    icon: 'success'
                });
            </script>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }

    if (isset($_POST['promote_admin'])) {
        $promote_user = mysqli_real_escape_string($conn, $_POST['promote_admin']);
        $updatesql = "UPDATE user_table SET role = 'Admin' WHERE user_id = '$promote_user'";
        if ($conn->query($updatesql) === TRUE) {
            echo "User promoted to admin successfully.";
        } else {
            echo "Error promoting user to admin: " . $conn->error;
        }
    }

    if (isset($_POST['activate'])) {
        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $activate_query = "UPDATE user_table SET status = 'active' WHERE user_id = '$user_id'";
        if (mysqli_query($conn, $activate_query)) {
            echo "<script>
                Swal.fire({
                    title: 'Activated!',
                    text: 'User has been set to active!',
                    icon: 'success'
                });
            </script>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}

// Check if table is not empty
if ($result->num_rows > 0) {
    echo "<main class='table' id='user_table'>";
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
    echo "<th>Account ID <span class='icon-arrow'>&UpArrow;</span></th>";
    echo "<th>Full Name <span class='icon-arrow'>&UpArrow;</span></th>";
    echo "<th>Role <span class='icon-arrow'>&UpArrow;</span></th>";
    echo "<th>Username <span class='icon-arrow'>&UpArrow;</span></th>";
    echo "<th>Email <span class='icon-arrow'>&UpArrow;</span></th>";
    echo "<th>Action <span class='icon-arrow'>&UpArrow;</span></th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach ($result as $fielddata) {
        echo "<tr>";
        echo "<td>" . $fielddata['user_id'] . "</td>";
        echo "<td>" . $fielddata['full_name'] . "</td>";
        echo "<td>" . $fielddata['role'] . "</td>";
        echo "<td>" . $fielddata['username'] . "</td>";
        echo "<td>" . $fielddata['email'] . "</td>";
        echo "<td>" . $fielddata['status'] . "</td>";
        // echo "<td>";
        // echo "<form action='' method='post'>";
        // echo "<input type='hidden' name='user_id' value='" . $fielddata['user_id'] . "'>";
        // echo "<button type='submit' name='promote_admin' value='" . $fielddata['user_id'] . "' class='admin-button bx bxs-user-plus'></button>";
        // echo "<button type='submit' name='delete' class='delete-button bx bxs-trash'></button>";
        // echo "<button type='submit' name='activate' class='activate-button bx bxs-user-check'></button>";
        // echo "</form>";
        // echo "</td>";
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