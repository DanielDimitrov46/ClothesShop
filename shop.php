<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Fashion</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<?php

$search = @$_GET['search'];
//$sizes = @$_GET['sizes'];

$connection = new PDO('mysql:host=localhost;dbname=18323',"root","");
//loading products
$rows = $connection -> query('SELECT 
i.idinventory,
i.name, i.price, i.color,
i.sizes, i.categories 
FROM inventory as i ;'
);


$con = mysqli_connect("localhost","root","","18323");
//search bar
if(isset($_GET['search'])) {
    $filtervalues = $_GET['search'];
    $query = "SELECT * FROM inventory WHERE CONCAT(name, price) LIKE '%$filtervalues%' ";
    $rows = mysqli_query($con, $query);
}

//filter menu
$color = @$_POST['color'];
$sql = "SELECT * FROM inventory WHERE 1=1";
if (!empty($color)) {
  $sql .= " AND color = '$color'";
  $rows = mysqli_query($con, $sql);
}
$size = @$_POST['size'];
if (!empty($size)) {
  $sql .= " AND sizes = '$size'";
  $rows = mysqli_query($con, $sql);
}
$category = @$_POST['category'];
if (!empty($category)) {
  $sql .= " AND categories = '$category'";
  $rows = mysqli_query($con, $sql);
}
?>



<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div>
        <?php
        include ('header.php');
        ?>
    </div>

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <?php
                include ('filters.php');
                ?>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <select class="sorting">
                                        <option value="">Default Sorting</option>
                                    </select>
                                    <select class="p-show">
                                        <option value="">Show:</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Section-->
                    <div class="product-list">
                        <div class="row">
                            <?php
                            foreach ($rows as $row){
                            ?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <a href="/18323/product.php?id=<?= $row['idinventory']?>">
                                    <div class="pi-pic">
                                        <img src="img/products/product-<?=$row["idinventory"]?>.jpg" alt="">
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="quick-view"><a href="#">+ Quick View</a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                            <h5><?= $row["name"] ?></h5>
                                        </a>
                                        <div class="product-price">
                                            $<?= $row["price"]?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <div >
        <?php
        include ('footer.php');
        ?>
    </div>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
