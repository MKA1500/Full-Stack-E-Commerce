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
          <input class="form-control" type="text" name="product_title" required>
        </div>
        <div class="col-md-6 form-group">
          <label for="product_title">Category</label>
          <select
            class="form-control"
            name="product_cat"
            required>
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
            name="product_brand"
            required>
            <option>Select a Brand</option>
            <?php getBrands("option"); ?>
          </select>
        </div>
        <div class="col-md-6 form-group">
          <label for="product_title">Image</label>
          <input class="form-control" type="file" name="product_image" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 form-group">
          <label for="product_title">Price</label>
          <input class="form-control" type="text" name="product_price" required>
        </div>
        <div class="col-md-6 form-group">
          <label for="product_title">Keywords</label>
          <input class="form-control" type="text" name="product_keywords" required>
        </div>
      </div>
      <div class="row">
        <div class="col-12 form-group">
          <label for="product_title">Description</label>
          <textarea
            class="form-control"
            type="text"
            name="product_desc"
            id="mytextarea"></textarea>
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
<?php
  if(isset($_POST['insert_post'])) {
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_brand = $_POST['product_brand'];
    $product_price = $_POST['product_price'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];

    $product_image = $_FILES['product_image']['name'];
    $product_image_temp = $_FILES['product_image']['temp_name'];

    echo $insert_product = "insert into products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
  }
?>
