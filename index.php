<?php
include("functions/functions.php");
include("./head.php");
include("./header-client.php");
?>
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
  <?php
  include("./footer.php");
  ?>
