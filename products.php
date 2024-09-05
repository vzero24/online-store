<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products | المنتجات</title>
  <link rel="stylesheet" href="css/products.css">
  <style>
    /* Ensures body takes full height and uses flexbox for layout */
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
      font-family: 'Cairo', sans-serif;
    }

    /* Ensure main content grows to fill available space */
    main {
      flex: 1;
    }

    /* Styling for the bottom-center div */
    .bottom-center {
      text-align: center;
      width: 100%;
      background-color: #f8f9fa;
      padding: 20px 0;
      font-family: 'Cairo', sans-serif;
      border-top: 1px solid #ddd;
      /* Optional: adds a border at the top */
      position: relative;
      bottom: 0;
      margin-top: auto;
      /* Pushes footer to the bottom */
    }

    /* Styling for links in the bottom-center div */
    .bottom-center a {
      display: inline-block;
      font-size: 1.2rem;
      color: #007bff;
      text-decoration: none;
      margin: 10px 20px;
      padding: 10px 20px;
      border-radius: 5px;
      background-color: #f8f9fa;
      border: 1px solid #007bff;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .bottom-center a:hover {
      background-color: #007bff;
      color: #ffffff;
    }

    .bottom-center p {
      font-size: 1rem;
      color: #6c757d;
      margin-top: 10px;
    }

    .card {
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 0.5rem;
      overflow: hidden;
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-body {
      padding: 15px;
    }
  </style>
</head>

<body>
  <center>
    <h3>لوحة تحكم الادمن</h3>
  </center>

  <div class="container mt-4">
    <div class="row">
      <?php
      include('config.php');
      $result = mysqli_query($con, "SELECT * FROM prod");
      while ($row = mysqli_fetch_array($result)) {
        echo "<div class='col-md-4'>
          <div class='card'>
            <img src='$row[image]' class='card-img-top' alt='$row[name]'>
            <div class='card-body'>
              <h5 class='card-title'>$row[name]</h5>
              <p class='card-text'>$row[price]</p>
              <a href='delete.php?id=$row[id]' class='btn btn-danger'>حذف منتج</a>
              <a href='update.php?id=$row[id]' class='btn btn-dark'>تعديل منتج</a>
            </div>
          </div>
        </div>";
      }
      ?>
    </div>
  </div>

  <div class="bottom-center">
    <a href="shop.php">المتجر</a>
    <a href="index.php"> اضافة منتج</a>
    <p>Developed By Marwan</p>
  </div>
</body>

</html>