<?php
include('config.php');

if (isset($_POST['upload'])) {
  $name = $_POST['name'];
  $price = $_POST['price'];
  $image_location = $_FILES['image']['tmp_name'];
  $image_name = $_FILES['image']['name'];
  $image_up = "images/" . $image_name;
  $insert = "INSERT INTO prod (name, price, image) VALUES ('$name','$price','$image_up')";

  if (mysqli_query($con, $insert)) {
    if (move_uploaded_file($image_location, $image_up)) {
      // Redirect to products.php without outputting anything
      header('Location: products.php?status=success');
      exit();
    } else {
      // Redirect with an error status if the image upload fails
      header('Location: products.php?status=image_error');
      exit();
    }
  } else {
    // Redirect with an error status if the database insertion fails
    header('Location: products.php?status=db_error');
    exit();
  }
}
