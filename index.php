<!DOCTYPE html>
<?php
include("functions/functions.php");
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles_dist/style.css" />
  <title>My Online Shop</title>
</head>
<body>
  <header class="header">
    <div class="brand">
      <h1 class="shop-title">agro-polo</h1>
    </div>

    <div class="menu-bar">

      <ul class="menu-list">
        <li class="menu-item"><a href="#" class="menu-link">Home</a></li>
        <li class="menu-item"><a href="#" class="menu-link">All Products</a></li>
        <li class="menu-item"><a href="#" class="menu-link">My Account</a></li>
        <li class="menu-item"><a href="#" class="menu-link">Sign Up</a></li>
        <li class="menu-item"><a href="#" class="menu-link">Shopping Cert</a></li>
        <li class="menu-item"><a href="#" class="menu-link">Contact Us</a></li>
      </ul>
      <div id="form">
        <form
          class="form-inline"
          method="get"
          action="results.php"
          enctype="multipart/form-data">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search a Product"
              aria-label="Search"
              name="user_query" />
            <input
              class="btn btn-outline-primary my-2 my-sm-0"
              type="submit"
              name="search"
              value="Search"
              role="button" />
        </form>
      </div>

    </div>
  </header>

  <div class="sidebar">
    <h5>Categories</h5>
    <ul class="sidebar-list" id="cats">
      <?php getCategories(); ?>
    </ul>

    <h5>Brands</h5>
    <ul class="sidebar-list" id="brands">
      <?php getBrands(); ?>
    </ul>
  </div>
  <main class="main">
    main content
  </main>
  <footer class="footer">
    footer
  </footer>
</body>
</html>
