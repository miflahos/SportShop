<?php
session_start();
require_once "connect/connect.php";
$connect=connection();
$select=$_SESSION['select'];
$val=$_SESSION['val'];
$id=$_GET['id'];
$user=$_SESSION['user']['user_id'];
$sql="INSERT INTO basketo(product_id,user_id) VALUES ($id,$user)";
$query=mysqli_query($connect,$sql);
header("Location: page.php?select=$select&val=$val");
?>