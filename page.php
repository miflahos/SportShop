<?php
session_start();
require_once ("connect/connect.php");
$connect=connection();
$select=$_GET['select'];
$val=$_GET['val'];
$_SESSION['select']=$select;
$_SESSION['val']=$val;

/*
$sql1="SELECT DISTINCT category
FROM product
";
$sql2="SELECT DISTINCT sex
FROM product";
$sql3="SELECT DISTINCT name FROM manafacturer";
$category=mysqli_query($connect,$sql3);
*/
if ($val==="category") {
    $sql = "SELECT *FROM product WHERE category='$select'";
    $_SESSION['product']=mysqli_query($connect,$sql);
}
elseif($val==="sex"){
    $sql = "SELECT *FROM product WHERE sex='$select'";
    $_SESSION['product']=mysqli_query($connect,$sql);
}
elseif ($val==="brand"){
    $sql="SELECT product.product_name,product.img,product.price,product.product_id
FROM product
INNER JOIN manafacturer ON product.manafacturer_id=manafacturer.manafacturer_id
WHERE manafacturer.name='$select'";
    $_SESSION['product']=mysqli_query($connect,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="asset/css/page2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/337b2ed79d.js" crossorigin="anonymous"></script>
    <title>Main page</title>
</head>
<body>
<div class="topnav" id="myTopnav">
    <a href="test.html" class="active">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Catalog
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content mega-menu animate">
            <ul>
                <li class="title">By Sex</li>
                <li class="animate"><a href="page.php?select=Men&val=sex">Male</a></li>
                <li class="animate"><a href="page.php?select=Women&val=sex">Female</a></li>
                <li class="animate"><a href="page.php?select=Unisex&val=sex">Unisex</a></li>
            </ul>
            <ul>
                <li class="title">By Sport</li>
                <li class="animate"><a href="">Football</a></li>
                <li class="animate"><a href="page.php?select=бокс&val=category">Box</a></li>
                <li class="animate"><a href="page.php?select=волейбол&val=category">Volleyball</a></li>
                <li class="animate"><a href="page.php?select=баскетбол&val=category">Basketball</a></li>
                <li class="animate"><a href="page.php?select=фитнес&val=category">Fitness</a></li>
                <li class="animate"><a href="page.php?select=воркаут&val=category">Workout</a></li>
                <li class="animate"><a href="page.php?select=теннис&val=category">Tennis</a></li>
                <li class="animate"><a href="page.php?select=плвание&val=category">Swimming</a></li>
                <li class="animate"><a href="page.php?select=гольф&val=category">Golf</a></li>
                <li class="animate"><a href="page.php?select=велоспорт&val=category">Cycling</a></li>
                <li class="animate"><a href="page.php?select=scating&val=category">Skating</a></li>
                <li class="animate"><a href="page.php?select=зимний спорт&val=category">Winter sport</a></li>
            </ul>
            <ul>
                <li class="title">By Brands</li>
                <li class="animate"><a href="page.php?select=Adidas&val=brand">Adidas</a></li>
                <li class="animate"><a href="page.php?select=Nike&val=brand">Nike</a></li>
                <li class="animate"><a href="page.php?select=Underarmour&val=brand">Underarmour</a></li>
                <li class="animate"><a href="page.php?select=Asics&val=brand">Asics</a></li>
                <li class="animate"><a href="page.php?select=Puma&val=brand">Puma</a></li>
                <li class="animate"><a href="page.php?select=Demix&val=brand">Demix</a></li>
                <li class="animate"><a href="page.php?select=Reebook&val=brand">Reebok</a></li>
                <li class="animate"><a href="page.php?select=New Balance&val=brand">New Balance</a></li>
                <li class="animate"><a href="page.php?select=Everlast&val=brand">Everlast</a></li>
                <li class="animate"><a href="page.php?select=Others&val=brand">Others</a></li>
            </ul>
        </div>
    </div>
    <a href="basket.php">Basket</a>
    <a href="account.php">My account</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<hr>
<h1><?php echo $select?></php></h1>
<div class="main">
<?php
while($product=mysqli_fetch_assoc($_SESSION['product'])){
    echo '<div class="product">
<div class="info">
<h4>'.$product['product_name'].'</h4>
</div>
<div class="image"><img src="'.$product['img'].'"></div>
<div class="button">
<a href="adToBasket.php?id='.$product['product_id'].'"><button type="submit" class="btn"><b>'.$product['price'].' KZT</b></button></a>
</div>
</div>';
}
?>
</div>

<footer class="footer">
    <div class="container">
        <div class="footer_inner">
            <div class="footer_col1">
                <div class="header_logo">
                    <img src="asset/css/img/logo_White.png">
                </div>
                <div class="footer_header">
                    We are in social media
                    <a href=# target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href=# target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href=# target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href=# target="_blank">
                        <i class="fab fa-telegram"></i>
                    </a>
                </div>
            </div>
            <div class="footer_col2">
                <div class="footer_content">About us<br>
                    Authors <br> How to use website <br> FAQ </div>
            </div>
        </div>
        <div class="copyright">
            © 2021 Sports Shop AITU project
        </div>
    </div>
</footer>

</body>
<script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
</html>
