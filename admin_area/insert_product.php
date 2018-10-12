<?php
include("../functions/functions.php");
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../styles_dist/style.css" />
  <title>Agro-Polo Online Shop</title>
</head>
<body class="admin-area">
  <header class="header admin-area-header">
    <div class="brand">
      <h1 class="shop-title">agro-polo</h1>
    </div>
    <p>Admin Panel: Insert Product</p>
  </header>
  <main class="container">
    <form
      action=insert_product.php
      method="post"
      enctype="multipart/form-data">
      <div class="form-group row">
        <label for="product_title" class="col-4 col-form-label">Product Title</label>
        <div class="col-8">
          <input class="form-control" type="text" name="product_title">
        </div>
      </div>
    </form>
  </main>
  <?php
  include("../footer.php");
  ?>
