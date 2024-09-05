<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Cart | عربتي</title>
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

  // Query to fetch all products from the cart
  $sql = "SELECT * FROM addcard";
  $result = mysqli_query($con, $sql);

  // Initialize total price
  $totalPrice = 0;

  echo "
  <center>
    <main>
      <table class='table'>
        <thead>
          <tr>
            <th scope='col'>Product Name</th>
            <th scope='col'>Product Price</th>
            <th scope='col'>Delete Product</th>
          </tr>
        </thead>
        <tbody>";

  while ($row = mysqli_fetch_array($result)) {
    // Extract numeric value from price string
    $priceString = $row['price'];
    // Remove any non-numeric characters except for decimal points
    $price = floatval(preg_replace('/[^\d.]/', '', $priceString));
    $totalPrice += $price;

    echo "
          <tr>
            <td>{$row['name']}</td>
            <td>{$price}</td>
            <td>
              <a href='del_card.php?id={$row['id']}' class='btn btn-danger'>ازالة</a>
            </td>
          </tr>";
  }

  echo "
        </tbody>
        <tfoot>
          <tr>
            <td><strong>Total</strong></td>
            <td><strong>$totalPrice</strong></td>
            <td></td> <!-- Empty cell for alignment -->
          </tr>
        </tfoot>
      </table>
    </main>
  </center>";

  // Close the database connection
  mysqli_close($con);
  ?>

  <center>
    <a href="shop.php">الرجوع لصفحة المنتجات</a>
  </center>

</body>

</html>