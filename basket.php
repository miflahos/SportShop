<?php
session_start();
require_once 'connect/connect.php';
$connect=connection();
$user=$_SESSION['user']['user_id'];
if (isset($user)){
    $sql="SELECT product.product_name,product.price,product.img,product.description,product.product_id
FROM basketo
INNER JOIN product ON product.product_id=basketo.product_id
 WHERE user_id=$user";
    $products=mysqli_query($connect,$sql);
}
else{
    header("Location: SportShop.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/basket.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Basket</title>
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
    <a href="basket.php">My basket</a>
    <a href="account.php">My account</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<div class="container">

    <section id="cart">
        <?php
        while ($basket=mysqli_fetch_assoc($products)){
            echo '<article class="product">
            <header>
                <a class="remove" href="removeProduct.php?id='.$basket['product_id'].'">
                    <img src="'.$basket['img'].'" alt="">

                    <h3>Remove product</h3>
                </a>
            </header>

            <div class="content">

                <h1>'.$basket['product_name'].'</h1>

                '.$basket['description'].'
                
                <div title="You have selected this product to be shipped in the color yellow." style="top: 0" class="color yellow"></div>
            </div>

            <footer class="content">
                <span class="qt-minus">-</span>
                <span class="qt">2</span>
                <span class="qt-plus">+</span>

                <h2 class="full-price">
                    '.$basket['price'].' KZT
                </h2>

                <h2 class="price">
                    '.$basket['price'].' KZT
                </h2>
            </footer>
        </article>';
        }
        ?>
    </section>

</div>

<footer id="site-footer">
    <div class="container clearfix">

        <div class="left">
            <h2 class="subtotal">Subtotal: <span>...</span>KZT</h2>
            <h3 class="tax">Taxes (5%): <span>...</span>KZT</h3>
            <h3 class="shipping">Shipping: <span>1.500</span>KZT</h3>
        </div>

        <div class="right">
            <h1 class="total">Total: <span>...</span>KZT</h1>
            <a class="btn" href="payment.php">Checkout</a>
        </div>

    </div>

</footer>


<script src="https://kit.fontawesome.com/337b2ed79d.js" crossorigin="anonymous"></script>
<footer class="footer">
    <div>
        <div class="footer_inner">
            <div class="footer_col1">
                <div class="header_logo">
                    <img src="assets/images/logo_White.png">
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
                <div class="footer_content"><a href="AboutUs.html">About Us</a><br>
                    <a href="AboutUs.html">Authors</a> <br>
                    <a href="AboutUs.html">FAQ</a><br> </div>
            </div>
        </div>
        <div class="copyright">
            © 2021 Sports Shop AITU project
        </div>
    </div>
</footer>
</body>




<script>
    var check = false;

    function changeVal(el) {
        var qt = parseFloat(el.parent().children(".qt").html());
        var price = parseFloat(el.parent().children(".price").html());
        var eq = Math.round(price * qt * 100) / 100;

        el.parent().children(".full-price").html( eq + "KZT" );

        changeTotal();
    }

    function changeTotal() {

        var price = 0;

        $(".full-price").each(function(index){
            price += parseFloat($(".full-price").eq(index).html());
        });

        price = Math.round(price * 100) / 100;
        var tax = Math.round(price * 0.05 * 100) / 100
        var shipping = parseFloat($(".shipping span").html());
        var fullPrice = Math.round((price + tax + shipping) *100) / 100;

        if(price == 0) {
            fullPrice = 0;
        }

        $(".subtotal span").html(price);
        $(".tax span").html(tax);
        $(".total span").html(fullPrice);
    }

    $(document).ready(function(){

        $(".remove").click(function(){
            var el = $(this);
            el.parent().parent().addClass("removed");
            window.setTimeout(
                function(){
                    el.parent().parent().slideUp('fast', function() {
                        el.parent().parent().remove();
                        if($(".product").length == 0) {
                            if(check) {
                                $("#cart").html("<h1>The shop does not function, yet!</h1><p>If you liked my shopping cart, please take a second and heart this Pen on <a href='https://codepen.io/ziga-miklic/pen/xhpob'>CodePen</a>. Thank you!</p>");
                            } else {
                                $("#cart").html("<h1>No products!</h1>");
                            }
                        }
                        changeTotal();
                    });
                }, 200);
        });

        $(".qt-plus").click(function(){
            $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);

            $(this).parent().children(".full-price").addClass("added");

            var el = $(this);
            window.setTimeout(function(){el.parent().children(".full-price").removeClass("added"); changeVal(el);}, 150);
        });

        $(".qt-minus").click(function(){

            child = $(this).parent().children(".qt");

            if(parseInt(child.html()) > 1) {
                child.html(parseInt(child.html()) - 1);
            }

            $(this).parent().children(".full-price").addClass("minused");

            var el = $(this);
            window.setTimeout(function(){el.parent().children(".full-price").removeClass("minused"); changeVal(el);}, 150);
        });

        window.setTimeout(function(){$(".is-open").removeClass("is-open")}, 1200);

        $(".btn").click(function(){
            check = true;
            $(".remove").click();
        });
    });
</script>
</html>
