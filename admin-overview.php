<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

.wrapper {
  height: 100vh;
  text-align: center;
  position: relative;
}

.wrapper button {
  position: relative;
  top: 50%;
  transform: translateY(-50%);
}

.loader {
  position: fixed;
  z-index: 999;
  top: 0;
  left: 0;
  width: 0;
  height: 100vh;
  transition: width 0s 1.4s ease;
}

.loader__icon {
  position: absolute;
  z-index: 1;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  opacity: 0;
  transition: opacity .5s ease;
}

.loader__icon svg {
  transform-origin: 0 0;
}

.loader__tile {
  position: absolute;
  left: 0;
  width: 0;
  height: 20%;
  background-color: #ff6486;
  transition: width .7s ease;
}

.loader__tile:nth-child(1) {
  top: calc(0 * 20%);
  transition-delay: 0s;
}

.loader__tile:nth-child(2) {
  top: calc(1 * 20%);
  transition-delay: 0.2s;
}

.loader__tile:nth-child(3) {
  top: calc(2 * 20%);
  transition-delay: 0.4s;
}

.loader__tile:nth-child(4) {
  top: calc(3 * 20%);
  transition-delay: 0.6s;
}

.loader__tile:nth-child(5) {
  top: calc(4 * 20%);
  transition-delay: 0.8s;
}

.loader--active {
  width: 100%;
  transition-delay: 0s;
}

.loader--active .loader__icon {
  opacity: 1;
  transition: opacity .5s 1.4s ease;
}

.loader--active .loader__tile {
  width: 100%;
}

.loader--active .loader__tile:nth-child(1) {
  transition-delay: 0s;
}

.loader--active .loader__tile:nth-child(2) {
  transition-delay: 0.2s;
}

.loader--active .loader__tile:nth-child(3) {
  transition-delay: 0.4s;
}

.loader--active .loader__tile:nth-child(4) {
  transition-delay: 0.6s;
}

.loader--active .loader__tile:nth-child(5) {
  transition-delay: 0.8s;
}



</style>

</head>

<body>

<?php
session_start();
require "dbconnect.php";

    $fullname = $_SESSION['full_name'];
    $type = $_SESSION['role'];

?>

<div class="wrapper">
    <button class="btn" type="button">START ORDERING</button>
    <div class="loader loader--active">
      <div class="loader__icon">
        <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
          <path opacity="0.2" fill="#fff" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"></path>
          <path fill="#fff" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0C22.32,8.481,24.301,9.057,26.013,10.047z"></path>
          <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 20 20" to="360 20 20" dur="0.5s" repeatCount="indefinite"></animateTransform>
        </svg>
      </div>
      <div class="loader__tile"></div>
      <div class="loader__tile"></div>
      <div class="loader__tile"></div>
      <div class="loader__tile"></div>
      <div class="loader__tile"></div>
    </div>


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
    <h1> Welcome <?php echo $type.", ".$fullname ?> </h1>

  </div>

  <!--<div class="container"> -->

  <div class="top-container">

  <!-- PRODUCTS -->
  <div class="top-box">

  <div class="circle">
    <i class="bi bi-cart" style="color: #fff; font-size: 30px; margin-top: 2px; margin-left: 0px;"></i>
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
    <i class="bi bi-bar-chart" style="color: #fff; font-size: 35px; margin-top: 2px; margin-left: 0px;"></i>
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
    <i class="bi bi-person" style="color: #fff; font-size: 40px; margin-top: 2px; margin-left: 0px;"></i>
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

 var $loader = document.querySelector('.loader');
var $content = document.querySelector('.content');
var $button = document.querySelector('.btn');

window.onload = function() {
  $loader.classList.remove('loader--active');
};

$button.addEventListener('click', function () {
  $loader.classList.add('loader--active');
  
  window.setTimeout(function () {
    $loader.classList.remove('loader--active');
    $content.classList.add('show');
    $button.remove(); // Remove the button after the loader completes
  }, 5000);
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