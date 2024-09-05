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
  <link rel="stylesheet" href="css/shop.css">
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <a id="aa" class="navbar-brand" href="card.php">Mycart | عربتي</a>
    <a href="products.php" class="navbar-brand">Admin Panel | لوحة تحكم الادمن</a>

  </nav>
  <center>
    <h3>المنتجات المتوفرة</h3>
  </center>
  <?php
  include('config.php');
  $result = mysqli_query($con, "SELECT * FROM prod");
  while ($row = mysqli_fetch_array($result)) {
    echo "  <center>
    <main>
    <div class='card' style='width: 15rem;'>
      <img src='$row[image]' class='card-img-top' >
      <div class='card-body'>
        <h5 class='card-title'>$row[name]</h5>
        <p class='card-text'>$row[price]</p>
        <a href='val.php?id=$row[id]' class='btn btn-success'>اضافة المنتج للعربة</a>
      </div>
    </div>
    </main>
    </center>";
  }
  ?>
</body>

</html>