<?php

$con = mysqli_connect("localhost", "root", "", "ecommerce");

function getCategories($display_type) {
  global $con;
  $get_cats = "select * from categories";
  $run_cats = mysqli_query($con, $get_cats);

  while ($row_cats=mysqli_fetch_array($run_cats)) {
    $cat_id = $row_cats['cat_id'];
    $cat_title = $row_cats['cat_title'];
    if ($display_type == "li") :
      echo "<li class='sidebar-item'><a href='#' class='sidebar-link'>$cat_title</a></li>";
    elseif ($display_type == "option") :
      echo "<option value='$cat_id'>$cat_title</option>";
    endif;
  }
}

function getBrands($display_type) {
  global $con;
  $get_brands = "select * from brands";
  $run_brands = mysqli_query($con, $get_brands);

  while ($row_brands=mysqli_fetch_array($run_brands)) {
    $brand_id = $row_brands['brand_id'];
    $brand_title = $row_brands['brand_title'];
    if ($display_type == "li") :
      echo "<li class='sidebar-item'><a href='#' class='sidebar-link'>$brand_title</a></li>";
    elseif ($display_type == "option") :
      echo "<option value='$brand_id'>$brand_title</option>";
    endif;
  }
}

?>
