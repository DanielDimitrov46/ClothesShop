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
$sizes = @$_GET['sizes'];

$connection = new PDO('mysql:host=localhost;dbname=18323',"root","");

$rows = $connection -> query('SELECT 
i.idinventory,
i.name, i.price, i.color,
i.sizes, i.categories 
FROM inventory as i ;'
);


//if ($search) {
//        $query = $connection->prepare('SELECT *
//FROM inventory i
//WHERE i.name LIKE ?
//OR i.color LIKE ?');
//        $query->execute([ "%".$search."%","%".$search."%"]);
//        $rows = $query->fetchAll();
//
//
//        echo "<pre>";
//        print_r( $rows );
//
//
//    }
//else{
//    $rows = $connection -> query('SELECT
//i.idinventory,
//i.name, i.price, i.color, i.categories, i.sizes
//FROM inventory i' );
//}
    $con = mysqli_connect("localhost","root","","18323");

if(isset($_GET['search'])) {
    $filtervalues = $_GET['search'];
    $query = "SELECT * FROM inventory WHERE CONCAT(name, price) LIKE '%$filtervalues%' ";
    $rows = mysqli_query($con, $query);
}
$black = @$_POST['black'];
$sql = "SELECT * FROM inventory WHERE 1=1";
if (!empty($black)) {
  $sql .= " AND color = '$black'";
  $rows = mysqli_query($con, $sql);
}
$violet = @$_POST['violet'];
$sql = "SELECT * FROM inventory WHERE 1=1";
if (!empty($violet)) {
  $sql .= " AND color = '$violet'";
  $rows = mysqli_query($con, $sql);
}
$blue = @$_POST['blue'];
$sql = "SELECT * FROM inventory WHERE 1=1";
if (!empty($blue)) {
  $sql .= " AND color = '$blue'";
  $rows = mysqli_query($con, $sql);
}
$yellow = @$_POST['yellow'];
$sql = "SELECT * FROM inventory WHERE 1=1";
if (!empty($yellow)) {
  $sql .= " AND color = '$yellow'";
  $rows = mysqli_query($con, $sql);
}
$red = @$_POST['red'];
$sql = "SELECT * FROM inventory WHERE 1=1";
if (!empty($red)) {
  $sql .= " AND color = '$red'";
  $rows = mysqli_query($con, $sql);
}
$green = @$_POST['green'];
$sql = "SELECT * FROM inventory WHERE 1=1";
if (!empty($green)) {
  $sql .= " AND color = '$green'";
  $rows = mysqli_query($con, $sql);
}

$xs = @$_POST['xs'];
if (!empty($s)) {
  $sql .= " AND sizes = '$xs'";
  $rows = mysqli_query($con, $sql);
}
$s = @$_POST['s'];
if (!empty($s)) {
  $sql .= " AND sizes = '$s'";
  $rows = mysqli_query($con, $sql);
}
$m = @$_POST['m'];
if (!empty($m)) {
  $sql .= " AND sizes = 'm'";
  $rows = mysqli_query($con, $sql);
}
$l = @$_POST['l'];
if (!empty($l)) {
  $sql .= " AND sizes = '$l'";
  $rows = mysqli_query($con, $sql);
}
$xl = @$_POST['xl'];
if (!empty($xl)) {
  $sql .= " AND sizes = '$xl'";
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
                                        <a href="#">
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
