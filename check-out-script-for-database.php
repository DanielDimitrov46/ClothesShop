<?php
$name = $_POST["fir"];
$last_name = $_POST["last"];
$company_name = $_POST["cun-name"];
$country = $_POST["con"];
$address = $_POST["street"];
$zip = $_POST["zip"];
$city = $_POST["town"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$conn = new mysqli('localhost','root','','18323');
if ($conn-> connect_error){
    die('Connection failed : ' . $conn-> connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO `18323`.`info` (`name`, `family`, `company_name`, `country`, `address`, `postcode`, `city`, `email`, `phone`) VALUES ('Daniel', 'Dimitrov', 'nqkoj', 'Bulgaria', 'Geo Milev', '1111', 'Sofia', 'dani.dimitrov', '0888863866')");
    $stmt->bind_param("sssssssss",$name,$last_name,$company_name,$country,$address,$zip,$city,$email,$phone);
    $stmt->execute();
    echo "Registration successful";
    $stmt ->close();
    $conn->close();
}


//$servername = "localhost:3306";
//$username = "root";
//$password = "";
//$dbname = "18323";
//$sql = "";
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $name = $_POST["name"];
//    $last_name = $_POST["last"];
//    $company_name = $_POST["company"];
//    $country = $_POST["country"];
//    $address = $_POST["address"];
//    $zip = $_POST["zip"];
//    $city = $_POST["town"];
//    $email = $_POST["email"];
//    $phone = $_POST["phone"];
//    $sql = "INSERT INTO info (`name`, `family`, `company_name`, `country`, `address`, `postcode`, `city`, `email`, `phone`)
//VALUES ('Daniel', 'Dimitrov', 'nqkoj', 'Bulgaria', 'Geo Milev', '1111', 'Sofia', 'dani.dimitrov', '0888863866')";
//    $conn->exec($sql);
//    echo "New record created successfully";
//} catch (PDOException $e) {
//    echo $sql . "<br>" . $e->getMessage();
//}
//
//$conn = null;

////print_r($_POST);
//$conn = new PDO('mysql:host=localhost:3306;dbname=18323', "root", "");
//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
////var_dump($name, $last_name, $company_name, $country, $address, $zip, $city, $email, $phone);
//$query = "INSERT INTO info (`name`, `family`, `company_name`, `country`, `address`, `postcode`, `city`, `email`, `phone`)
//VALUES (?,?,?,?,?,?,?,?,?);";
//$conn->exec($query);
?>