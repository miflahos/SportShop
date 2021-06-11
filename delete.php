<?php
session_start();
require_once "connect/connect.php";
$connect=connection();
$product=$_GET['id'];
$link=$_GET['link'];
unlink($link);
mysqli_query($connect,"DELETE FROM `product` WHERE `product`.`product_id` = $product");
header("Location:dashboard.php");
?>