<?php
session_start();
if ($_SESSION['login']=='Error'){
    echo "<script>alert('Error')</script>";
    header('Location: SportShop.php');
}
elseif ($_SESSION['login']=='LogOut'){
    unset($_SESSION['login']);
    header('Location: SportShop.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/account.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/337b2ed79d.js" crossorigin="anonymous"></script>
    <title>My account</title>
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
<div class="main">
    <div class="back" id="val1"></div>
    <div class="bio">
        <div class="Pin">
            <div class="background"></div>
            <div id="personal">
            <p>Personal Information</p>
    <hr class="line">
                <a href="#"><div id="favorites" class="cat">Favorites</div></a>
                <a href="#"><div id="pass" class="cat" onclick="document.getElementById('id02').style.display='block'">Change password</div></a>
                <?php if ($_SESSION['user']['admin']==1){
                    echo '<a href="dashboard.php"><div id="LogOut" class="cat" >Dashboard</div></a>';
                }
                ?>
                <a href="logOut.php"><div id="LogOut" class="cat" >LogOut</div></a>
        </div>
        </div>
        <div class="form">
            <form class="info">
            <div class="data">
                <div class="cabinet-lbl">Name: </div>
                <div class="cabinet-val"><input  id="in" disabled value="<?=$_SESSION['user']['name']?>"></div>
            </div>
            <div class="data">
                <div class="cabinet-lbl">Surname: </div>
                <div class="cabinet-val"><input height="100%" width="100%"  disabled value="<?=$_SESSION['user']['surname'] ?>"></div>
            </div>
            <div class="data">
                <div class="cabinet-lbl">Phone: </div>
                <div class="cabinet-val"><input  disabled value="<?=$_SESSION['user']['phone']?>"></div></div>
            <div class="data">
                <div class="cabinet-lbl">E-mail: </div>
                <div class="cabinet-val"><input  disabled value="<?=$_SESSION['user']['email']?>"></div></div>
            <div class="data">
                <div class="cabinet-lbl">Address: </div>
                <div class="cabinet-val"><input  disabled value="<?=$_SESSION['user']['address']?>"></div></div>
            <div class="data">
                <div class="cabinet-lbl">Payment card: </div>
                <div class="cabinet-val"><input  disabled value="<?=$_SESSION['user']['payment_card']?>"></div></div>
            <input type="submit" value="To change the data" onclick="document.getElementById('id01').style.display='block'">
            </form>
        </div>
    </div>
    <div class="back" id="val2"></div>

</div>
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
                <div class="footer_content"><a href="AboutUs.html" class="link">About Us</a><br>
                    <a href="AboutUs.html" class="link">Authors</a><br>
                    <a href="AboutUs.html" class="link">FAQ</a><br></div>
            </div>
        </div>
        <div class="copyright">
            © 2021 Sports Shop AITU project
        </div>
    </div>
</footer>
<!---Modal-->

<div id="id01" class="modal">
    <form class="modal-content" action="/action_page.php">
        <div class="container">
            <div class="krest"></div>
            <h1>To change the data</h1>
            <hr>
            <div class="data">
                <label for="name" class="cabinet-lbl"><b>Name:</b></label>
                <input type="text" name="name" required class="js-val"></div>
            <div class="data">
                <label for="name" class="cabinet-lbl"><b>Surname:</b></label>
                <input type="text" name="surname" required class="js-val"></div>

            <div class="data">
                <label for="email" class="cabinet-lbl"><b>Email:</b></label>
                <input type="text" name="email" required class="js-val"></div>

            <div class="data">
                <label for="email" class="cabinet-lbl"><b>Address:</b></label>
                <input type="text" name="address" required class="js-val"></div>

            <div class="data">
                <label for="email" class="cabinet-lbl"><b>Payment card:</b></label>
                <input type="text" name="payment-card" required class="js-val"></div>

            <div class="data">
                <label for="phone" class="cabinet-lbl">Phone number:</label>

                <input type="tel" id="phone" name="phone"
                       required class="js-val"></div>
            <div class="clearfix">
                <button type="submit" class="save">Save</button>
            </div>
        </div>
    </form>
</div>



<div id="id02" class="modal">
    <form class="password-content" action="/action_page.php">
        <div class="container">
            <div class="krest"></div>
            <h1>Change the password</h1>
            <hr>
            <div class="data">
                <label for="name" class="cabinet-lbl"><b>Old password</b></label>
                <input type="text" name="name" required class="js-val"></div>

            <div class="data">
                <label for="name" class="cabinet-lbl"><b>New password</b></label>
                <input type="text" name="surname" required class="js-val"></div>

            <div class="data">
                <label for="email" class="cabinet-lbl"><b>New password again:</b></label>
                <input type="text" name="email" required class="js-val"></div>
            <div class="clearfix">
                <button type="submit" class="save" onclick="">Save</button>
            </div>
        </div>
    </form>
</div>




<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
    // Get the modal
    var modal = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>