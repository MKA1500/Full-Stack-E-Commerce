<?php
include("../functions/functions.php");
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../styles_dist/style.css" />
  <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
  <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
  <title>Agro-Polo Online Shop</title>
</head>
<body class="admin-area">
    <div class="brand">
      <h1 class="shop-title">agro-polo</h1>
      <p>Admin Panel: Insert a Product</p>
    </div>
  <main class="container pt-5">
    <form
      action=insert_product.php
      method="post"
      enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6 form-group">
          <label for="product_title">Title</label>
          <input class="form-control" type="text" name="product_title">
        </div>
        <div class="col-md-6 form-group">
          <label for="product_title">Category</label>
          <select
            class="form-control"
            name="product_cat">
            <option>Select a Category</option>
            <?php getCategories("option"); ?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 form-group">
          <label for="product_title">Brand</label>
          <select
            class="form-control"
            name="product_brand">
            <option>Select a Brand</option>
            <?php getBrands("option"); ?>
          </select>
        </div>
        <div class="col-md-6 form-group">
          <label for="product_title">Image</label>
          <input class="form-control" type="file" name="product_image">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 form-group">
          <label for="product_title">Price</label>
          <input class="form-control" type="text" name="product_price">
        </div>
        <div class="col-md-6 form-group">
          <label for="product_title">Keywords</label>
          <input class="form-control" type="text" name="product_keywords">
        </div>
      </div>
      <div class="row">
        <div class="col-12 form-group">
          <label for="product_title">Description</label>
          <textarea class="form-control" type="text" name="product_desc" id="mytextarea"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-12 submit-row">
          <input
            type="submit"
            role="button"
            name="insert_post"
            class="btn btn-primary submit-btn"
            value="Insert Product">
        </div>
      </div>
    </form>
  </main>
