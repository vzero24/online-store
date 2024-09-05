<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My cart | عربتي</title>
  <link rel="stylesheet" href="css/card.css">
</head>

<body>
  <center>
    <h3>
      منتجاتك المحجوزة
    </h3>
  </center>

  <?php
  include('config.php');
  $sql = "SELECT * FROM addcard";
  $result = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_array($result)) {
    echo "
    <center>
    <main>
      <table class='table'>
        <thead >
          <tr>
            <th scope='col'>Product Name</th>
            <th scope='col'>Product Price</th>
            <th scope='col'>Delete Product</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>$row[name]</td>
            <td>$row[price]</td>
            <td> <a href='del_card.php? id=$row[id]' class='btn btn-danger'>ازالة</a></td>
          </tr>

        </tbody>
      </table>
    </main>
  </center>";
  }
  ?>
  <center>
    <a href="shop.php">الرجوع لصفحة المنتجات</a>
  </center>

</body>

</html>