<?php
session_start();
require_once ("connect/connect.php");
$connect=connection();
$select=$_GET['select'];
$sql="SELECT *FROM product WHERE category=$select";
$products=mysqli_query($connect,$sql);
while($product=mysqli_fetch_assoc($products)){
    echo $product['product_name'];
}
?>