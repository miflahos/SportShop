<?php
session_start();
require_once "connect/connect.php";
$connect=connection();
$user=$_SESSION['user']['user_id'];
$product=$_GET['id'];
$sql="DELETE FROM basketo WHERE user_id='$user' AND product_id='$product'";
$query=mysqli_query($connect,$sql);
header("Location: basket.php");
?>