<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/337b2ed79d.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <title>Main page</title>
</head>
<body>
<div class="topnav" id="myTopnav">
    <a href="#" class="active">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Catalog
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content mega-menu animate">
            <ul>
                <li class="title">By Sex</li>
                <li class="animate"><a href="">Male</a></li>
                <li class="animate"><a href="">Female</a></li>
                <li class="animate"><a href="">Unisex</a></li>
            </ul>
            <ul>
                <li class="title">By Sport</li>
                <li class="animate"><a href="">Football</a></li>
                <li class="animate"><a href="">Box</a></li>
                <li class="animate"><a href="">Volleyball</a></li>
                <li class="animate"><a href="">Basketball</a></li>
                <li class="animate"><a href="">Fitness</a></li>
                <li class="animate"><a href="">Workout</a></li>
                <li class="animate"><a href="">Tennis</a></li>
                <li class="animate"><a href="">Swimming</a></li>
                <li class="animate"><a href="">Golf</a></li>
                <li class="animate"><a href="">Cycling</a></li>
                <li class="animate"><a href="">Skating</a></li>
                <li class="animate"><a href="">Winter sport</a></li>
            </ul>
            <ul>
                <li class="title">By Brands</li>
                <li class="animate"><a href="">Adidas</a></li>
                <li class="animate"><a href="">Nike</a></li>
                <li class="animate"><a href="">Underarmour</a></li>
                <li class="animate"><a href="">Asics</a></li>
                <li class="animate"><a href="">Puma</a></li>
                <li class="animate"><a href="">Demix</a></li>
                <li class="animate"><a href="">Reebok</a></li>
                <li class="animate"><a href="">New Balance</a></li>
                <li class="animate"><a href="">Everlast</a></li>
                <li class="animate"><a href="">Others</a></li>
            </ul>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">My basket
        </button>
    </div>
    <a href="#">My account</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<div class="logoHead"></div>

<div class="slider">
    <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">

        <div class="slide first">
            <img src="asset/images/sl1.jpg" alt="">
        </div>
        <div class="slide" alt="">
            <img src="asset/images/sl2.jpg" alt="">
        </div>

        <div class="slide" alt="">
            <img src="asset/images/sl3.jpg" alt="">
        </div>

        <div class="slide" alt="">
            <img src="asset/images/sl4.jpg" alt="">
        </div>

        <div class="navigation-auto1">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
        </div>
    </div>
    <div class="navigation-manual1">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
    </div>
</div>
<section class="content">
    <div class="section_header">
        <h3 class="section__subtitle">Brands we work with</h3>
        <div class="slider2 middle">



            <div class="home-demo">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="asset/images/logo1.png">
                    </div>
                    <div class="item">
                        <img src="asset/images/logo2.png">
                    </div>
                    <div class="item">
                        <img src="asset/images/logo3.png">
                    </div>
                    <div class="item">
                        <img src="asset/images/logo4.png">
                    </div>
                    <div class="item">
                        <img src="asset/images/logo5.png">
                    </div>
                    <div class="item">
                        <img src="asset/images/logo6.png">
                    </div>
                    <div class="item">
                        <img src="asset/images/logo7.png">
                    </div>
                    <div class="item">
                        <img src="asset/images/logo8.png">
                    </div>
                    <div class="item">
                        <img src="asset/images/logo9.png">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class=section__subtitle>Top 3 best-selling products</div>
<section class="product_part">
    <div class="product">
        <div class="product_img">
            <img src="assets/images/mask.png" alt="">
        </div>
        <div class="product_description">
            One of the most popular equipment nowadays
        </div>
    </div>
    <div class="product">
        <div class="product_img">
            <img src="assets/images/ball.png" alt="">
        </div>
        <div class="product_description">
            Football balls from English Premier League 2020/21 season
        </div>
    </div>
    <div class="product">
        <div class="product_img">
            <img src="assets/images/shoes.png" alt="">
        </div>
        <div class="product_description">
            New ASICS shoes for Volleyball
        </div>
    </div>

</section>
<section class="prefooter_part">
    <div class="prefooter">
        <div class="prefooter_img">
            <img src="assets/images/prefooter.jpg">
        </div>
        <div class="prefooter_text1"> Быстро Качественно</div>
        <div class="prefooter_text2"> Выберите свой товар закажите через наш сайт</div>
    </div>
</section>

<footer class="footer">
    <div class="container">
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
                <div class="footer_content"><a href="#aboutus">About Us</a><br>
                    <a href="#author">Authors</a> <br>
                    <a href="#FAQ">FAQ</a><br> </div>
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


    var counter=1;
    setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter>4){
            counter=1;
        }
    },3000);

    $(function() {
        // Owl Carousel
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            items: 3,
            margin: 10,
            loop: true,
            nav: true
        });
    });

</script>

</html>