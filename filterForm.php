<?php
// Connect to your database
$connection = new PDO('mysql:host=localhost;dbname=my_database', 'username', 'password');

// Process the user's input
$color = $_POST['black'];
$rating = $_POST['blue'];

$sql = "SELECT * FROM inventory WHERE 1=1 ";
if ($color != "") {
    $sql .= " AND color = :category";
}
if ($rating != "") {
    $sql .= " AND color = :rating";
}

$stmt = $connection->prepare($sql);

if ($color != "") {
    $stmt->bindParam(':category', $color);
}
if ($rating != "") {
    $stmt->bindParam(':rating', $rating);
}

// Execute the SQL statement
$stmt->execute();
?>