<?php
session_start();
require "connect/connect.php";
$connect=connection();
$output=mysqli_query($connect,"SELECT product.product_id,product.product_name,product.price,manafacturer.name, manafacturer.manafacturer_id,product.img FROM product INNER JOIN manafacturer ON product.manafacturer_id=manafacturer.manafacturer_id");
$brands=mysqli_query($connect,"SELECT * FROM `manafacturer`");
if ($_SESSION['user']['admin']==null){
    header('Location: SportShop.php');
}
?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" href="asset/css/dashboard.css"
</head>
<body>
<header>
    <div class="logo"></div>
    <div class="title">
        <p>Dashboard</p>
    </div>
    <section class="main">
        <div class="container">
    <table class="info">
        <thead>
        <tr>
            <th>#</th>
            <th>Name of product</th>
            <th>Price</th>
            <th>Brand</th>
        </tr>
        </thead>
        <tbody>
            <?php
            while($product=mysqli_fetch_assoc($output)){
                echo '<tr> 
            <th>'.$product['product_id'].'</th>
            <td>
                <div class="button">
                    <button type="button" class="btn" aria-expanded="false">'.$product['product_name'].'</button>
                    <div class="drop-menu">
                        <!---<a href="#">Change</a>-->
                        <a href="delete.php?id='.$product['product_id'].'">Remove</a>
                    </div>
                    </div>
                    </td>
            <td>'.$product['price'].' KZT</td>
            <td>
                <div class="button">
                    <button type="button" class="btn" aria-expanded="false">'.$product['name'].'</button>
                    <div class="drop-menu">
                        <!---<a href="#">Change</a>-->
                        <a href="delete.php?id='.$product['manafacturer_id'].'&link='.$product['img'].'">Remove</a>
                    </div>
                    </div>
                    </td>
                    </tr>';
            }
            ?>
        </tbody>
    </table>
        </div>
        <div class="addProduct">
            <h2>Add new product</h2>
            <form action="AddData.php" method="post" enctype="multipart/form-data">
                <div class="data">
                    <div class="cabinet-lbl">The name of product: </div>
                    <div class="cabinet-val"><input type="text"  id="in" name="name" placeholder="Enter the name of product..." required></div>
                </div>
                <div class="data">
                    <div class="cabinet-lbl">Price: </div>
                    <div class="cabinet-val"><input type="text" id="in" name="price" required placeholder="Enter the price..."></div>
                </div>
                <div class="data">
                    <div class="cabinet-lbl">Image: </div>
                    <div class="cabinet-val"><input  id="in" type="file" name="image" required></div>
                </div>
                <div class="data">
                    <div class="cabinet-lbl">discount: </div>
                    <div class="cabinet-val"><input  id="in" type="text" name="discount" required placeholder="Enter the discount..."></div>
                </div>
                <div class="data">
                    <div class="cabinet-lbl">The category: </div>
                    <div class="cabinet-val">
                        <select name="category">
                            <option>scating</option>
                            <option>баскетбол</option>
                            <option>бокс</option>
                            <option>волейбол</option>
                            <option>велоспорт</option>
                            <option>воркаут</option>
                            <option>гольф</option>
                            <option>зимний спорт</option>
                            <option>плавание</option>
                            <option>теннис</option>
                            <option>фитнес</option>
                        </select>
                    </div>
                </div>
                <div class="data">
                    <div class="cabinet-lbl">The sex:</div>
                    <div class="cabinet-val">
                        <select name="sex">
                            <option>Men</option>
                            <option>Unisex</option>
                            <option>Women</option>
                        </select>
                    </div>
                </div>
                <div class="data">
                    <div class="cabinet-lbl">Brand: </div>
                    <div class="cabinet-val">
                        <select name="select">
                            <option disabled>Select brand</option>
                            <?php
                            while($brand=mysqli_fetch_assoc($brands)) {
                                echo '<option name="brand" value="'.$brand['manafacturer_id'].'">'.$brand['name'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="data">
                    <div class="cabinet-lbl">The description: </div>
                    <div class="cabinet-val"><input  id="in" name="description" type="text" placeholder="Write description" required></div>
                </div>
                <button type="submit" name="btn" class="submit">Send </button>
            </form>
        </div>
        <hr>
        <div class="addProduct">
            <h2>Add new manufacture</h2>
            <form method="post" action="manufacture.php" enctype="multipart/form-data">
                <div class="data">
                    <div class="cabinet-lbl">The name of manufacture: </div>
                    <div class="cabinet-val"><input id="in" type="text" name="brand" required placeholder="Enter the brand..."></div>
                </div>
                <div class="data">
                    <div class="cabinet-lbl">The logo: </div>
                    <div class="cabinet-val"><input id="in" name="logo" type="file" required></div>
                </div>
                <div class="data">
                    <div class="cabinet-lbl">The description: </div>
                    <div class="cabinet-val"><input id="in" type="text" name="des" required placeholder="Enter the description..."></div>
                </div>
                <button type="submit" name="btn" class="submit">Send </button>
            </form>
        </div>
    </section>
</header>
</body>
</html>
