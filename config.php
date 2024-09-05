<?php

// $con =  mysqli_connect('localhost', 'root', '', 'online');

$con =  mysqli_connect('db', 'root', 'rootpassword', 'online');
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
