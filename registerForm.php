<?php

$connection = new PDO('mysql:host=localhost;dbname=18323',"root","");

session_start();

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_WARNING);
$error = "";

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