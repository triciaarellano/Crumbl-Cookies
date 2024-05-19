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
 .search-bar {
	 height: 34px;
	 display: flex;
	 width: 100%;
	 max-width: 450px;
}
 .search-bar input {
	 width: 100%;
	 height: 100%;
	 border: none;
	 background-color: #e4e4e4a9;
	 border-radius: 8px;
	 font-family: var(--body-font);
	 font-size: 14px;
	 font-weight: 500;
	 padding: 0 40px 0 16px;
	 box-shadow: 0 0 0 2px rgba(134, 140, 160, 0.02);
	 color: #ff6486;
}

.user-settings-container {
      display: flex;
	  position: relative;
	  left: 60%;
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
	 margin-top: 30px;
	 padding-bottom: 20px;
	 position: sticky;
	 top: 0;
	 left: 0;
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


  <div class="main-container">
   <div class="main-header anim" style="--delay: 0s">Dashboard</div>
   <div class="main-blogs">
    <div class="main-blog anim" style="--delay: .1s">
     <div class="main-blog__title">Welcome, Admin!</div>
     <div class="main-blog__author">
      <div class="author-img__wrapper">
       
      </div>
      <div class="author-detail">
 
      </div>
     </div>
    </div>

    <div class="main-blog anim" style="--delay: .2s">
     <div class="main-blog__title">Skateboard Tips You need to know</div>
     <div class="main-blog__author tips">
      <div class="author-img__wrapper">
       
   
  </div>
 </div>

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
  document.querySelectorAll(".logo, .logo-expand, .overview").forEach(function(element) {
    element.addEventListener("click", handleLogoClick);
  });

});

</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>