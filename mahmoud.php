if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_array($result)) {
echo '
<div class="col-md-4 mb-4">
  <div class="card">
    <img src="' . $row['image'] . '" class="card-img-top" alt="Product Image">
    <div class="card-body">
      <h5 class="card-title">' . $row['name'] . '</h5>
      <p class="card-text">$' . $row['price'] . '</p>
      <a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger">Delete</a>';

      // if for admin users
      if ($_SESSION['is_admin']) {
      echo '<a href="edit_product.php?id=' . $row['id'] . '" class="btn btn-primary">Edit</a>';
      }

      echo '
      <a href="card.php?action=add&id=' . $row['id'] . '" class="btn btn-success">Add to Cart</a>
    </div>
  </div>
</div>';
}
} else {
echo '<div class="col-12">
  <p class="text-center">No products found.</p>
</div>';
}
?>
</div>
</div>