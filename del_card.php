<?php
include('config.php');
$id = $_GET['id'];
$sql = "DELETE FROM addcard WHERE id = $id";
mysqli_query($con, $sql);
header('location: card.php');
