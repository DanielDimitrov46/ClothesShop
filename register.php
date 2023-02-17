<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
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

$connection = new PDO('mysql:host=localhost;dbname=18323',"root","");

session_start();


if ($_POST ['register']) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = false;

    $check = $connection->query("SELECT * FROM Users WHERE Username = '" . $username . "'")->fetch();

    if ($check) {
        $error = "This profile already exists";
    }
    if (!$username) {
        $error = "No username";

    }
    if (!$email) {
     $error = "No email";
    }
    if (!$password) {
     $error = "No password";
    }

    if (!$error) {

        $sql = "INSERT INTO Users (Username, Email, Password) VALUES (?,?,?)";
        $connection->prepare($sql)->execute([$username, $email, $password]);

        $error = "Thank you!";

    }

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
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        <form action="" method="post">
                            <div class="group-input">
                                <input name="username" type="text" id="username" autocomplete="off"  value="<?= $username ?>" placeholder="Username">
                            </div>
                            <div class="group-input">
                                <input name="email" type="email" id="email" autocomplete="off" value="<?= $email ?>" placeholder="Email">
                            </div>
                            <div class="group-input">
                                <input name="password" type="password" class="input" id="user_pass" autocomplete="off" value="<?= $password ?>" placeholder="Password"><br>
                            </div>
                            <?php if ($error){
                                ?>
                                <label style="position:absolute; font-family: 'Times New Roman'"><br><?= $error ?></label><br><br>
                                <?php
                            }?>
                            <button type="submit" class="site-btn register-btn">REGISTER</button>
                        </form>
                        <div class="switch-login">
                            <a href="./login.php" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
    <div>
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