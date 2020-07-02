<?php
include '../includes/connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$sfcsimage = $_POST['sfcsimage'];
$sql = "INSERT INTO items (name, price, sfcsimage) VALUES ('$name', $price, '$sfcsimage')";
$con->query($sql);
header("location: ../admin-page.php");
?>