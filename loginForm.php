<?php

$connection = new PDO('mysql:host=localhost;dbname=18323',"root","");

session_start();

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_WARNING);
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

else if ($_POST['login']) {

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
