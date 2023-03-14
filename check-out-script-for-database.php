<?php
$conn = mysqli_connect("localhost", "root", "", "18323");
$first_name = @$_REQUEST['fir'];
$last_name = @$_REQUEST['last'];
$company = @$_REQUEST['cun-name'];
$country = @$_REQUEST['con'];
$address = @$_REQUEST['street'];
$zip = @$_REQUEST['zip'];
$city = @$_REQUEST['town'];
$email =@$_REQUEST['email'];
$phone = @$_REQUEST['phone'];
$sql = "INSERT INTO checkout (`name`, `family`, `company_name`, `country`, `address`, `postcode`, `city`, `email`, `phone`) VALUES ('$first_name','$last_name','$company','$country','$address','$zip','$city','$email','$phone')";

if (mysqli_query($conn, $sql)) {
    echo "You have purchase successfully";
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
header("location:../18323/index.php");

// Close connection
mysqli_close($conn);

?>