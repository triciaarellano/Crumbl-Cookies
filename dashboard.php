<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">

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
    <a class="sidebar-link overview is-active" href="dashboard.php">
     <i class="bi bi-house-door icon"></i>
     Overview
    </a>
    <a class="sidebar-link trending" href="accounts.php">
     <i class="bi bi-people"></i>
     Accounts
    </a>
    <a class="sidebar-link" href="products.php">
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


 <div class="wrapper-top">
  <div class="header-dashboard">
   <div class="search-bar">
    <input type="text" placeholder="Search">
   </div>

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

  <?php 
  include "dbconnect.php";
  session_start();

  $fullname = $_SESSION['full_name'];
  $type = $_SESSION['role'];

  ?>
  <div class="main-container">
    <div class="main-header anim" style="--delay: 0s">Dashboard</div>
    <div class="main-welcome">
        <div class="main-block anim" style="--delay: .1s">
            <div class="main-block__title">Welcome,  <br><?php echo $type." ".$fullname."!"?></div>
            <div class="main-block__contents">

                <div id="day" class="day"></div>
                <div id="clock" class="clock"></div>

            </div>
        </div>

        <div class="wrapper anim" style="--delay: .2s">
      <header>
        <p class="current-date"></p>
        <div class="icons">
          <span id="prev" class="bi bi-chevron-left"></span>
          <span id="next" class="bi bi-chevron-right"></span>
        </div>
      </header>
      <div class="calendar">
        <ul class="weeks">
          <li>Sun</li>
          <li>Mon</li>
          <li>Tue</li>
          <li>Wed</li>
          <li>Thu</li>
          <li>Fri</li>
          <li>Sat</li>
        </ul>
        <ul class="days"></ul>
      </div>
    </div>

</div>

<div class="sub-container">

    <div class="sub-categories">

        <div class="sub-block anim" style="--delay: .3s;">

        <div class="circle" style="background-color: #aafadb;">
              <i class="bi bi-cart" style="color: #fff; font-size: 30px; margin-left: 12px; margin-bottom: 4px;"></i>
        </div>

            <div class="sub-block__title">
                <div class="small-text">
                  OUR
                </div>
                <div class="large-text">
                  PRODUCTS
                </div>
          </div>

            <div class="sub-block__contents">
                <div class="product-number">
                <?php 

                    $product_count_query = "SELECT * FROM product_table WHERE product_id";
                    $product_query = mysqli_query($conn, $product_count_query);
                    if ($product_total = mysqli_num_rows($product_query)) {
                      echo "<div class='number'>" . $product_total . "</div> <div class='item-text'>items</div>";
                    } else {
                    }

                    ?>
                  </div>
              </div>

        </div>

        <div class="sub-block anim" style="--delay: .4s">

            <div class="circle" style="background-color: #ffb0bf;">
              <i class="bi bi-bar-chart" style="color: #fff; font-size: 30px; margin-left: 12px; margin-bottom: 4px;"></i>
            </div>
        
            <div class="sub-block__title">
                <div class="small-text">
                  TOTAL
                </div>
                <div class="large-text">
                  EARNINGS
                </div>
          </div>

            <div class="sub-block__contents">
                <div class="product-number">
                <?php 

                  // Query to get the sum of total_amount from sales_table
                  $sales_sum_query = "SELECT SUM(total_amount) AS total_sales FROM sales_table";
                  $sales_query = mysqli_query($conn, $sales_sum_query);

                  if ($sales_query) {
                      // Fetch the result as an associative array
                      $row = mysqli_fetch_assoc($sales_query);
                      $total_sales = $row['total_sales'];

                      echo "<div class='number'>" . $total_sales . "</div> <div class='item-text'>pesos</div>";
                  } else {
                      // Handle the error if the query fails
                      echo "Error: " . mysqli_error($conn);
                  }
                  ?>
                  </div>
              </div>

        </div>

        <div class="sub-block anim" style="--delay: .5s">
            
        <div class="circle" style="background-color: #c8b1ff;">
              <i class="bi bi-person" style="color: #fff; font-size: 30px; margin-left: 12px; margin-bottom: 4px;"></i>
            </div>
        
            <div class="sub-block__title">
                <div class="small-text">
                  TOTAL
                </div>
                <div class="large-text">
                  USERS
                </div>
          </div>

            <div class="sub-block__contents">
                <div class="product-number">

                <?php 

            $user_count_query = "SELECT * FROM user_table WHERE status = 'Active'";
            $user_query = mysqli_query($conn, $user_count_query);
            if ($user_total = mysqli_num_rows($user_query)) {
              echo "<div class='number'>" . $user_total . "</div> <div class='item-text'>users</div>";
            } else {
            }

            ?>
                  </div>
              </div>

            </div>
    </div>
</div>
      
<div class="bottom-table-container">

    <div class="bottom-categories">
      <?php
    $selectsql = "SELECT transaction_id, product_id, price, quantity_sold, transaction_date FROM join_transaction_table";
$result = $conn->query($selectsql);
?>

<div class="bottom-block anim" style="--delay: .6s">
    <div class="bottom-block__title">Transactions</div>
    <div class="bottom-block__contents">
        <?php
        if ($result->num_rows > 0) {
            echo '<table border="1">';
            echo '<tr><th>Transaction ID</th><th>Product ID</th><th>Price</th><th>Quantity Sold</th><th>Transaction Date</th></tr>';
            while($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["transaction_id"] . '</td>';
                echo '<td>' . $row["product_id"] . '</td>';
                echo '<td>' . $row["price"] . '</td>';
                echo '<td>' . $row["quantity_sold"] . '</td>';
                echo '<td>' . $row["transaction_date"] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
</div>

<div class="bottom-block anim" style="--delay: .7s">
    <div class="bottom-block__title">Low Inventory Alert!</div>
    <div class="bottom-block__contents">
    <?php
     include "dbconnect.php";
    // SQL query to fetch low stock items
    $low_stock_query = "SELECT product_name, quantity_available FROM product_table WHERE quantity_available < 5";
    $low_stock_result = mysqli_query($conn, $low_stock_query);

    // Check if the query was successful
    if ($low_stock_result) {
        // Check if there are any low stock items
        if (mysqli_num_rows($low_stock_result) > 0) {
            // Start the table
            echo '<table border="1">
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity Available</th>
                    </tr>';
            
            // Fetch each row and display in the table
            while ($row = mysqli_fetch_assoc($low_stock_result)) {
                echo '<tr>
                        <td>' . htmlspecialchars($row['product_name']) . '</td>
                        <td>' . htmlspecialchars($row['quantity_available']) . '</td>
                      </tr>';
            }

            // End the table
            echo '</table>';
        } else {
            // If no low stock items are found
            echo '<p>No items are currently low in stock.</p>';
        }
    } else {
        // Handle the error if the query fails
        echo '<p>Error retrieving low stock items: ' . mysqli_error($conn) . '</p>';
    }
    ?>
    </div>
</div>


</div>
</form>


<script>
document.addEventListener("DOMContentLoaded", function() {
  // Variables and Constants
  
  const daysTag = document.querySelector(".days");
  const currentDate = document.querySelector(".current-date");
  const prevNextIcon = document.querySelectorAll(".icons span");

  let date = new Date();
  let currYear = date.getFullYear();
  let currMonth = date.getMonth();

  const months = ["January", "February", "March", "April", "May", "June", "July",
                  "August", "September", "October", "November", "December"];

  // User Settings Dropdown Toggle
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

  // Sidebar Link Active State
  function handleSidebarLinkClick(event) {
    // Remove 'is-active' class from all sidebar links
    document.querySelectorAll(".sidebar-link").forEach(function(link) {
      link.classList.remove("is-active");
    });
    // Add 'is-active' class to the clicked sidebar link
    event.target.classList.add("is-active");
  }

  // Add click event listeners to all sidebar links
  document.querySelectorAll(".sidebar-link").forEach(function(link) {
    link.addEventListener("click", handleSidebarLinkClick);
  });

  // Sidebar Collapse Handling
  function handleWindowResize() {
    const sidebar = document.querySelector(".sidebar");
    if (window.innerWidth > 1090) {
      sidebar.classList.remove("collapse");
    } else {
      sidebar.classList.add("collapse");
    }
  }

  window.addEventListener("resize", handleWindowResize);
  handleWindowResize(); // Initial check

  // Main Container Show/Hide Handling
  function handleLogoClick() {
    const mainContainer = document.querySelector(".main-container");
    mainContainer.classList.remove("show");
    mainContainer.scrollTop = 0;
  }

  // Add click event listeners to logo, logo-expand, and overview
  document.querySelectorAll(".logo, .logo-expand, .overview").forEach(function(element) {
    element.addEventListener("click", handleLogoClick);
  });

  // Real-Time Clock
  function updateClockAndDay() {
    const clockElement = document.getElementById('clock');
    const dayElement = document.getElementById('day');
    const now = new Date();
    let hours = now.getHours();
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');
    const ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    const hoursString = hours.toString().padStart(2, '0');
    clockElement.textContent = `${hoursString}:${minutes}:${seconds} ${ampm}`;
    const dayOfWeek = now.toLocaleDateString('en-US', { weekday: 'long' });
    dayElement.textContent = dayOfWeek;
  }

  setInterval(updateClockAndDay, 1000);
  updateClockAndDay(); // Initial call to set the clock and day immediately


  // Calendar
  const renderCalendar = () => {
    const firstDayofMonth = new Date(currYear, currMonth, 1).getDay();
    const lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate();
    const lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay();
    const lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();

    let liTag = "";

    for (let i = firstDayofMonth; i > 0; i--) { 
      liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateofMonth; i++) {
      let isToday = i === date.getDate() && currMonth === new Date().getMonth() 
                    && currYear === new Date().getFullYear() ? "active" : "";
      liTag += `<li class="${isToday}">${i}</li>`;
    }

    for (let i = lastDayofMonth; i < 6; i++) { 
      liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
    }
    
    currentDate.innerText = `${months[currMonth]} ${currYear}`;
    daysTag.innerHTML = liTag;
  }

  renderCalendar();

  prevNextIcon.forEach(icon => {
    icon.addEventListener("click", () => { 
      currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

      if (currMonth < 0 || currMonth > 11) { 
        date = new Date(currYear, currMonth, new Date().getDate());
        currYear = date.getFullYear();
        currMonth = date.getMonth();
      } else {
        date = new Date();
      }
      
      renderCalendar();
    });
  });

  // Sidebar Toggle
  toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
  });
});


</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>