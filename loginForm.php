<?php

$connection = new PDO('mysql:host=localhost;dbname=18323',"root","");

session_start();

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_WARNING);


if ($_POST['login']) {


    $username = $_POST['username'];
    $password = $_POST['password'];
    $error2 = false;

    $query = "SELECT * FROM Users WHERE Username = '" . $username . "' AND Password = '" . $password . "'";

    $user = $connection->query($query)->fetch();

    if ($user) {

        $_SESSION['user'] = $user;
        header("location:../18323/index.php");

    } else {

        $error2 = "Incorrect Username or Password !";
    }

}
?>
