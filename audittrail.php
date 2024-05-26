<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Audit Trail</title>
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
    overflow: hidden;
    font-size: 15px;
    font-weight: 500;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
    position: absolute;
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

.table__header {
	position: relative;
	width: 99%;
	height: 10%;
	display: flex;
	align-items: center;
  justify-content: flex-start;
  background-color: transparent;
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
	background-color: white;
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

.modal-footer .btn-secondary {
  background-color: #ff5151;
  border-color: #f095a8;
}

.modal-footer .btn-primary {
  margin-right: -15px;
  border-color: transparent;
}

/* -- COLLAPSE CARD -- */

.card {
  background-color: pink;
}

.unavailable-status {
  color: red;
}

.form-label {
  color: #333;
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
    <a class="sidebar-link is-active" href="audittrail.php">
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
   <div class="main-header anim" style="--delay: 0s">Audit Trail</div>
</div>


<?php
require_once "dbconnect.php";

// LOG IN TOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO
if (isset($_POST['sub'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); //encrypted


    $loginsql = "SELECT * FROM user_table WHERE username = '".$username."' AND password = '".$password."'";
    $result = $conn->query($loginsql);



    //check if there is a matching record
    if ($result->num_rows == 1) {
        $fielddata = $result->fetch_assoc();
        $user_type = $fielddata['role']; // will get the user type of the matching record
        //user's full name
        $fullname = $fielddata['fullname'];
        $user_id = $_SESSION['user_id'] = $fielddata['User_ID'];


        $_SESSION['user'] = $fullname; //user's fullname inserted to a session variable
        $_SESSION['type'] = $user_type;


        $logsql = "INSERT INTO logs_table (user_id, action, DateTime) VALUES ($user_id, 'Logged IN', NOW())";
        $conn->query($logsql);
    }
}


// Check if the search input is clicked and not null, change $selectsql syntax
if (isset($_POST['search']) && $_POST['search'] != NULL) {
    $searchinput = $_POST['search'];
    $selectsql = "SELECT * FROM join_logs_user WHERE log_id LIKE '%$searchinput%' OR user_id LIKE '%$searchinput%' OR action LIKE '%$searchinput%' OR DateTime LIKE '%$searchinput%'";
} else {

    $selectsql = "SELECT * FROM join_logs_user ORDER BY log_id DESC";
}


$result = $conn->query($selectsql);

// Check if table is not empty
if ($result->num_rows > 0) {
    echo "<main class='table anim' style='--delay: .4s' id='join_logs_user'>";
    echo "<section class='table__header anim' style='--delay: .4s'>";
    echo "<div class='input-group'>";
    echo "<input type='search' name='search' class='search-input' placeholder='Search User'>";
    echo "</div>";
    echo "<button id='refreshButton' class='btn-refresh'><i class='bi bi-arrow-clockwise'></i></button>";
    echo "</section>";
    echo "<section class='table__body'>";
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Log ID<span class='icon-arrow'>&UpArrow;</span></th>";
    echo "<th>Role<span class='icon-arrow'>&UpArrow;</span></th>";
    echo "<th>Username<span class='icon-arrow'>&UpArrow;</span></th>";
    echo "<th>Action<span class='icon-arrow'>&UpArrow;</span></th>";
    echo "<th>Date and Time<span class='icon-arrow'>&UpArrow;</span></th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($result as $fielddata) {
        echo "<tr>";
        echo "<td>" . $fielddata['log_id'] . "</td>";
        echo "<td>" . $fielddata['role'] . "</td>";
        echo "<td>" . $fielddata['username'] . "</td>";
        echo "<td>" . $fielddata['action'] . "</td>";
        echo "<td>" . date('Y-m-d h:i:s', strtotime($fielddata['DateTime'])) . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</section>";
    echo "</main>";
} else {
    echo "No records found";
}
?>



         <script src='script.js'></script>

         <script>
document.addEventListener("DOMContentLoaded", function() {

    // Element selectors
    const userSettings = document.querySelector('.user-settings');
    const dropdownMenu = document.querySelector('.dropdown-menu');
    const sidebarLinks = document.querySelectorAll(".sidebar-link");
    const sidebar = document.querySelector(".sidebar");
    const mainContainer = document.querySelector(".main-container");
    const logoElements = document.querySelectorAll(".logo, .logo-expand, .sidebar-link");

    // Toggle dropdown menu visibility
    userSettings.addEventListener('click', function() {
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    });

    // Close the dropdown if the user clicks outside of it
    window.addEventListener('click', function(event) {
        if (!userSettings.contains(event.target)) {
            dropdownMenu.style.display = 'none';
        }
    });

    // Handle sidebar link click
    function handleSidebarLinkClick(event) {
        // Remove 'is-active' class from all sidebar links
        sidebarLinks.forEach(function(link) {
            link.classList.remove("is-active");
        });
        // Add 'is-active' class to the clicked sidebar link
        event.target.classList.add("is-active");
    }

    // Add click event listeners to all sidebar links
    sidebarLinks.forEach(function(link) {
        link.addEventListener("click", handleSidebarLinkClick);
    });

    // Handle window resize
    function handleWindowResize() {
        // Toggle 'collapse' class based on window width
        if (window.innerWidth > 1090) {
            sidebar.classList.remove("collapse");
        } else {
            sidebar.classList.add("collapse");
        }
    }

    // Add resize event listener and initial call
    window.addEventListener("resize", handleWindowResize);
    handleWindowResize();

    // Handle logo, logo-expand, and overview click
    function handleLogoClick() {
        // Remove 'show' class and scroll main container to top
        mainContainer.classList.remove("show");
        mainContainer.scrollTop = 0;
    }

    // Add click event listeners to logo elements
    logoElements.forEach(function(element) {
        element.addEventListener("click", handleLogoClick);
    });

});

// Refresh button functionality
document.getElementById('refreshButton').addEventListener('click', function() {
    location.reload();
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        
  
</body>
 
</html>