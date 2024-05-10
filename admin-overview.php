

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  

  <!--CSS STYLING SEPARATE-->

  <style>

.top-container,
.bottom-container {
  width: calc(100% - 10px); 
  display: flex;
  justify-content: center;
  margin: 10px auto;
  flex: 1; /* Take remaining space */
}

.top-container {
  margin-top: 70px;
}

.middle-container {
  width: calc(100% - 10px); 
  background-color: #f6f7fb;
  max-width: 1600px; /* Adjust the width as needed */
  margin: 10px auto; /* Center the container horizontally */
  display: flex;
  justify-content: center;
  flex: 1; /* Take remaining space */ 
}

.top-box {
  width: 450px;
  height: 200px;
  border-radius: 8px; 
}

.middle-box {
  width: 1100px;
  height: 300px;
  border-radius: 8px; 
}

.stock-container {
  width: 706px;
  margin-right: 18px;
  height: 373px;
  border-radius: 8px;
  margin-top: 15px;
  padding: 0; /* Reset padding */
  justify-content: left;
}

.top-box {
  position: relative;
  background: white;
  font-size: 32px;
  font-weight: 700;
  text-align: center;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

body.dark .top-box {
  background: linear-gradient(135deg, #ff8ba0, #242627);
  font-size: 32px;
  font-weight: 700;
  text-align: center;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
}


.middle-box {
  background-color: #ccffcc;  
  font-size: 32px;
  font-weight: 700;
  text-align: center;
}

.stock-container {
  background-color: white;
  font-size: 32px;
  font-weight: 700;
  text-align: center;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.top-box,
.middle-box {
  border-radius: 8px; 
  margin: 10px;
}


.top-box,
.middle-box,
.stock-container {
  /* Add transition for scaling and other properties */
  transition: transform 0.3s ease-out, background-color 0.3s ease-out;
}

.top-box:hover,
.middle-box:hover {
  transform: scale(1.05);
}

.stock-container:hover {
  transform: scale(1.02);
}

.right-text {
  font-size: 70px;
  font-weight: 700;
  line-height: 1;
  justify-content: right;
  align-items: right;
}

.welcome-text {
  font-size: 23px; 
  font-weight: 500;
  color: var(--text-color);
  position: absolute;
  top: 5%;
  right: 20%;
  color: white;
}

.dashboard-text {
  font-size: 36px; 
  font-weight: bold;
  color: var(--text-color); 
  margin-top: 40px; 
  margin-left: 20px;
}

.circle {
  position: absolute;
  top: 30px; 
  left: 30px;
  height: 60px;
  width: 60px; 
  background: #ff8ba0;
  color: #fff;
  font-size: 1.2rem;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.product-text {
  font-size: 28px; 
  font-weight: 400; 
  color: #333; 
  margin-left: 7rem; 
  margin-top: 30px;
  line-height: 1.8rem;
  text-align: left;
}

.small-text {
  font-size: 18px; 
  font-weight: 400; 
  color: #333; 
}

.large-text {
  font-size: 28px; 
  font-weight: 400; 
  color: #333; 
  margin-top: 5px;
}

.product-number {
  display: inline-flex; /* Use inline-flex to keep it inline but flexible */
  align-items: center; /* Align items vertically */
  justify-content: center;
  margin: 10px;
}

.number {
  font-size: 50px;
  font-weight: bold;
  color: #333;
  margin: 0; /* Reset margin */
  padding-right: 10px; /* Add padding instead of margin */
  text-align: right;
  line-height: 1; /* Ensure consistent line height */
  margin-top: 10px; 
}

.item-text {
  font-size: 18px;
  color: #333;
  margin: 0; /* Reset margin */
  margin-top: 30px;
}

.trans-text {
  font-size: 28px; 
  font-weight: 400; 
  color: #333; 
  margin-top: 5px;
  margin-left: 20px;
  text-align: left;
}

.table-container {
  width: 706px;
  max-width: 900px; /* Add max-width to limit the width of the table */
  height: auto; 
  max-height: 450px; 
  display: flex; 
  margin: 0; /* Reset margin */
  padding: 0; /* Reset padding */
}

.table {
  width: 100%;
  border-collapse: collapse;
}

.table th, .table td {
  padding: 10px;
  text-align: center;
}

.table th {
  color: #333;
}

.table tbody tr:hover {
  background-color: #f2f2f2;
}

.table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}



</style>

</head>

<body>

  <nav class="sidebar">
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
<!--
  <div class="right-container">

   
      <div class="wrapper">
      <header>
        <p class="current-date"></p>
        <div class="icons">
          <span id="prev" class="material-symbols-rounded">chevron_left</span>
          <span id="next" class="material-symbols-rounded">chevron_right</span>
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
  </div>
-->

  <div class="dashboard-header">

   <form action="admin-overview.php" method="post" class="search-form">
    
      <!--<div class="search-box">
        <input type="text" name="search" class="search-input" placeholder="Search...">
        <button type="submit" class="search-button"><i class="bx bx-search" style="font-size: 24px; margin-top: 5px;"></i></button>
      </div> -->
    </form>
  </div> 

  <div class="text">
    <div class="dashboard-text">DASHBOARD</div>

  </div>

  <!--<div class="container"> -->

  <div class="top-container">

  <!-- PRODUCTS -->
  <div class="top-box">

  <div class="circle">
    <i class="bx bxs-cart" style="color: #fff; font-size: 40px; margin-top: 2px; margin-left: 0px;"></i>
  </div>

  <div class="product-text">
    <span class="small-text">OUR</span><br>
    <span class="large-text">PRODUCTS</span>
  </div>

  <div class="product-number">
    <div class="number">28</div>
    <span class="item-text">items</span>
  </div>

</div>

    <!-- SALES RECORD -->
    <div class="top-box">
    <div class="circle">
    <i class="bx bx-bar-chart-alt" style="color: #fff; font-size: 40px; margin-top: 2px; margin-left: 0px;"></i>
  </div>

  <div class="product-text">
    <span class="small-text">TOTAL</span><br>
    <span class="large-text">EARNINGS</span>
  </div>

  <div class="product-number">
    <div class="number">8,560</div>
    <span class="item-text">pesos</span>
  </div>
    </div>

    <!-- AUDIT TRAIL -->
    <div class="top-box">
    <div class="circle">
    <i class="bx bx-user" style="color: #fff; font-size: 40px; margin-top: 2px; margin-left: 0px;"></i>
  </div>

  <div class="product-text">
    <span class="small-text">TODAY'S</span><br>
    <span class="large-text">VISITORS</span>
  </div>

  <div class="product-number">
    <div class="number">35</div>
    <span class="item-text">users</span>
  </div>
    </div>

  </div>

  <div class="middle-container">

  <!-- TRANSACTIONS -->
  <div class="table-container">
    <?php
      include "dbconnect.php";

      $selectsql = "SELECT * FROM inven_sales";

      // Check if the search input is clicked and not null, change $selectsql syntax
      if (isset($_POST['search']) && $_POST['search'] != NULL) {
        $searchinput = $_POST['search'];
        $selectsql = "SELECT * FROM transaction_table WHERE transaction_id LIKE '%$searchinput%' OR product_id LIKE '%$searchinput%' OR transaction_date LIKE '%$searchinput%'"; 
      } else {
        $selectsql = "SELECT * FROM transaction_table";
      }

      $result = $conn->query($selectsql);

      // Check if table is not empty
      if ($result->num_rows > 0) {
        echo "<div class='table' id='transaction_table'>";
        echo "<div class='table__body'>";
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Transaction ID</th>";
        echo "<th>Product ID</th>";
        echo "<th>Quantity</th>";
        echo "<th>Date</span></th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($result as $fielddata) {
          echo "<tr>";
          echo "<td>" . $fielddata['transaction_id'] . "</td>";
          echo "<td>" . $fielddata['product_id'] . "</td>";
          echo "<td>" . $fielddata['quantity_sold'] . "</td>";
          echo "<td>" . $fielddata['transaction_date'] . "</td>";
          echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>"; 
        echo "</div>"; 
      } else {
        echo "<p>No records found</p>";
      }
    ?>
  </div>

  <!-- INVENTORY -->
<div class="stock-container">
    <div class="product-text">Low Stock Alert</div>
    </div>

</div>

  </div>

  <div class="bottom-container">


    <!-- ARCHIVES 
    <div class="bottom-box">
    <i class='bx bx-folder'></i> ARCHIVES
    </div>
  </div> -->

  <!-- </div> -->
  
  <script>
        function previewImg(event){
            var display = document.getElementById("preview_img");
            display.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
 
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
  const daysTag = document.querySelector(".days");

//calendar
currentDate = document.querySelector(".current-date"),
prevNextIcon = document.querySelectorAll(".icons span");

let date = new Date(),
currYear = date.getFullYear(),
currMonth = date.getMonth();

const months = ["January", "February", "March", "April", "May", "June", "July",
              "August", "September", "October", "November", "December"];

const renderCalendar = () => {

    let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), 
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), 
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), 
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); 

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
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`
    }
    
    currentDate.innerText = `${months[currMonth]} ${currYear}`;
    daysTag.innerHTML = liTag;
}

toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

renderCalendar();
prevNextIcon.forEach(icon => { 
    icon.addEventListener("click", () => { 
        
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;
        if(currMonth < 0 || currMonth > 11) { 
          
            date = new Date(currYear, currMonth, new Date().getDate());
            currYear = date.getFullYear(); 
            currMonth = date.getMonth(); 
        } else {
            date = new Date(); 
        }
        renderCalendar(); 
    });
});



  //para sa light and dark mode
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