<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">

  <style>

@import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap");
 
 * {
	 outline: none;
}

 html {
	 -webkit-font-smoothing: antialiased;
}

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

:root {
    --body-font: "Inter", sans-serif;
    --theme-bg: #f6f7fb; 
    --body-color: #333; 
    --button-bg: #fdfbff; 
    --border-color: #000;
    --delay: 0s;
}

 .sidebar {
	 width: 15%;
	 height: 100%;
	 padding: 30px;
	 display: flex;
	 flex-direction: column;
	 flex-shrink: 0;
	 transition-duration: 0.2s;
	 overflow-y: auto;
	 overflow-x: hidden;
}

.sidebar .logo img {
    width: 200px; 
    height: 100px; 
	margin-top: -1.5rem;
	margin-left: -1rem;
    flex-shrink: 0;
    color: #333;
    align-items: left;
    justify-content: left;
	object-fit: cover;
}

 .sidebar-link:hover, .sidebar-link.is-active {
	 color: #ff6486;
	 font-weight: 600;
}

 .sidebar-link:hover:nth-child(2n + 1) svg, .sidebar-link.is-active:nth-child(2n + 1) svg {
	 background: #ff7551;
}

 .sidebar-link:hover:nth-child(2n) svg, .sidebar-link.is-active:nth-child(2n) svg {
	 background: #32a7e2;
}

 .sidebar-link:hover:nth-child(2n + 3) svg, .sidebar-link.is-active:nth-child(2n + 3) svg {
	 background: #6c5ecf;
}

 .sidebar.collapse {
	 width: 90px;
	 border-right: 1px solid var(--border-color);
}

 @keyframes bottom {
	 0% {
		 transform: translateY(100px);
		 opacity: 0;
	}
	 100% {
		 opacity: 1;
		 transform: none;
	}
}
 .side-menu {
	 display: flex;
	 flex-direction: column;
}
 .side-menu a {
	 display: flex;
	 align-items: center;
	 text-decoration: none;
	 color: var(--body-color);
}
 .side-menu a + a {
	 margin-top: 26px;
}

.bi {
  font-family: "bootstrap-icons";
  font-size: 1.5rem;
  color: inherit;
  margin-right: 0.75rem;
}

.bi:hover {
  color: #ff6486; 
}

 .side-title {
	 font-size: 12px;
	 letter-spacing: 0.07em;
	 margin-bottom: 24px;
	 color: #333;
}
 .side-wrapper {
	 border-bottom: 1px solid var(--border-color);
	 padding: 36px 0;
	 width: 145px;
}
 .side-wrapper + .side-wrapper {
	 border-bottom: none;
}
 .wrapper {
	 display: flex;
	 flex-direction: column;
	 flex-grow: 1;
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

 @media screen and (max-width: 575px) {
	 .user-settings .notify .notification {
		 display: none;
	}
}
 .user-img {
	 width: 30px;
	 height: 30px;
	 flex-shrink: 0;
	 object-fit: cover;
	 border-radius: 50%;
}
 .user-name {
	 color: #ff6486;
	 font-size: 14px;
	 margin: 0 6px 0 12px;
}
 @media screen and (max-width: 575px) {
	 .user-name {
		 display: none;
	}
}
 .main-container {
	 display: flex;
	 flex-direction: column;
	 padding: 0 30px 30px;
	 flex-grow: 1;
	 overflow: auto;
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
 .small-header {
	 font-size: 24px;
	 font-weight: 500;
	 color: #333;
	 margin: 30px 0 20px;
}
 .main-blogs {
	 display: flex;
	 align-items: center;
}
 .main-blog__author {
	 display: flex;
	 align-items: center;
	 padding-bottom: 10px;
}
 .main-blog__author.tips {
	 flex-direction: column-reverse;
	 align-items: flex-start;
}
 .main-blog__title {
	 font-size: 25px;
	 max-width: 12ch;
	 font-weight: 600;
	 letter-spacing: 1px;
	 color: #333;
	 margin-bottom: 30px;
}
 .main-blog {
	 background-color: #31abbd;
	 display: flex;
	 flex-direction: column;
	 width: 65%;
	 padding: 30px;
	 border-radius: 20px;
	 align-self: stretch;
	 overflow: hidden;
	 position: relative;
	 transition: background 0.3s;
	 background-repeat: no-repeat;
}
 .main-blog + .main-blog {
	 margin-left: 20px;
	 width: 35%;
	 background-color: #31abbd;
}
 .main-blog + .main-blog .author-img {
	 border-color: #000;
	 margin-top: 14px;
}
 .main-blog + .main-blog .author-img__wrapper svg {
	 border-color: #ffe6b2;
	 color: #e7bb7d;
}
 .main-blog + .main-blog .author-detail {
	 margin-left: 0;
}
 @media screen and (max-width: 905px) {
	 .main-blog, .main-blog + .main-blog {
		 width: 50%;
		 padding: 30px;
	}
	 .main-blog {
		 background-size: cover;
		 background-position-x: center;
		 background-blend-mode: overlay;
	}
}

 .author-img {
	 width: 52px;
	 height: 52px;
	 border: 1px solid #000;
	 padding: 4px;
	 border-radius: 50%;
	 object-fit: cover;
}
 .author-img__wrapper {
	 position: relative;
	 flex-shrink: 0;
}
 .author-img__wrapper svg {
	 width: 16px;
	 padding: 2px;
	 background-color: #333;
	 color: #0daabc;
	 border-radius: 50%;
	 border: 2px solid #0daabc;
	 position: absolute;
	 bottom: 5px;
	 right: 0;
}
 .author-name {
	 font-size: 15px;
	 color: #333;
	 font-weight: 500;
	 margin-bottom: 8px;
}
 .author-info {
	 font-size: 13px;
	 font-weight: 400;
	 color: #333;
}
 .author-detail {
	 margin-left: 16px;
}

 @media screen and (max-width: 475px) {
	 .main-blog__title {
		 font-size: 20px;
	}
	 .author-name {
		 font-size: 14px;
	}
	 .main-blog__author {
		 flex-direction: column-reverse;
		 align-items: flex-start;
	}
	 .author-detail {
		 margin-left: 0;
	}
	 .main-blog .author-img {
		 margin-top: 14px;
	}
	 .main-container {
		 padding: 0 20px 20px;
	}
	 .header {
		 padding: 20px;
	}
	 .sidebar.collapse {
		 width: 40px;
	}
	 .sidebar {
		 align-items: center;
	}
	 body {
		 padding: 0;
	}
	 .container {
		 height: 100vh;
		 border-radius: 0;
		 max-height: 100%;
	}
}
 ::-webkit-scrollbar {
	 width: 6px;
	 border-radius: 10px;
}
 ::-webkit-scrollbar-thumb {
	 background-color: #000;
	 border-radius: 10px;
}

/* -- TABLE -- */


main.table {
	width: calc(100vw - 200px);
	max-width: 100%;
	width: 80vw;
	height: 85vh;
	margin-top: 30px;

	font-size: 16px;
	overflow: hidden;
}

.table__header {
	position: relative;
	width: 100%;
	height: 10%;
	padding: 0.8rem 1rem;

	display: flex;
	justify-content: space-between;
	align-items: center;
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
}

.btn-refresh {
	position: relative;
	padding: 1px 16px;
	font-size: 14px;
	background-color: #f095a8;
	color: #fff;
	border: none;
	border-radius: 1rem;
	cursor: pointer;
	display: inline-flex;
	align-items: center;
	justify-content: center;
	margin-bottom: -30px;
	margin-right: 1.6rem;
	transition: 0.3s;
}

.btn-refresh:hover {
	box-shadow: 0 0.1rem 0.4rem #0002;
}

.btn-refresh .bx {
	margin-right: 10px;
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
  background-color: #007bff;
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
  background-color: #e9ecef;
  border-top: none;
  padding: 15px;
}

.modal-footer .btn-secondary {
  background-color: #6c757d;
  border-color: #6c757d;
}

.modal-footer .btn-primary {
  background-color: #007bff;
  border-color: #007bff;
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
    <a class="sidebar-link is-active" href="accounts.php">
     <i class="bi bi-people"></i>
     Accounts
    </a>
    <a class="sidebar-link" href="products.php">
     <i class="bi bi-cart icon"></i>
     Products
    </a>
    <a class="sidebar-link" href="archives.php">
     <i class="bi bi-bookmark-fill"></i>
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


 <div class="wrapper">
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
   <div class="main-header anim" style="--delay: 0s">Accounts</div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


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
    echo "<main class='table anim' style='--delay: .2s' id='user_table'>";
    echo "<section class='table__header'>";
    echo "<div class='input-group'>";
    echo "<input type='search' name='search' class='search-input' placeholder='Search Data'>";
    echo "</div>";
    echo "<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>Add Account</button>";
    echo "<button id='refreshButton' class='btn-refresh'><i class='bi bi-arrow-clockwise' style='color: #fff; font-family: Montserrat; font-size: 20px; background: transparent;'></i> Refresh</button>";
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
    echo "<th>Status <span class='icon-arrow'>&UpArrow;</span></th>";
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


          </script>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
 
</html>