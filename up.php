<?php
ob_start(); // Start output buffering
include('config.php');

if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $price = $_POST['price'];

  if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/" . $image_name;

    if (move_uploaded_file($image_location, $image_up)) {
      $update = "UPDATE prod SET name = '$name', price = '$price', image = '$image_up' WHERE id = $id";
      mysqli_query($con, $update);
      echo "<script>alert('تم تحديث المنتج بنجاح')</script>";
    } else {
      echo "<script>alert('حدث خطأ أثناء رفع المنتج')</script>";
    }
  } else {
    $update = "UPDATE prod SET name = '$name', price = '$price' WHERE id = $id";
    mysqli_query($con, $update);
    echo "<script>alert('تم تحديث المنتج بنجاح بدون تحديث الصورة')</script>";
  }

  if (!headers_sent()) {
    header('Location: products.php');
    exit();
  } else {
    echo "<script>alert('حدث خطأ أثناء إعادة التوجيه إلى صفحة المنتجات')</script>";
  }
}

ob_end_flush(); // End output buffering and send output
