<?php
$conn = mysqli_connect("localhost", "root", "", "18323");

		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all 5 values from the form data(input)
		$username = $_REQUEST['username'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];

		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO Users (Username, Email, Password) VALUES ('$username','$email','$password')";

		if(mysqli_query($conn, $sql)){
			echo "    <h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		// Close connection
		mysqli_close($conn);
		?>
<?php
//$conn = mysqli_connect("localhost", "root", "", "18323");
//$username = $_REQUEST['username'];//isset($_POST['username'])
//$email = $_REQUEST['email'];
//$password = $_REQUEST['password'];
//$error = false;
//
//
//if ($_REQUEST['register']) {
//
//
//    $check = $conn->query("SELECT * FROM Users WHERE Username = '" . $username . "'")->fetch();
//
//    if ($check) {
//        $error = "This profile already exists";
//    }
//    if (!$username) {
//        $error = "No username";
//
//    }
//    if (!$email) {
//        $error = "No email";
//    }
//    if (!$password) {
//        $error = "No password";
//    }
//
//    if (!$error) {
//
//        $sql = "INSERT INTO Users (Username, Email, Password) VALUES (?,?,?)";
//        $conn->prepare($sql)->execute([$username, $email, $password]);
//
//        $error = "Thank you!";
//
//    }
//}


//$sql = "INSERT INTO users (Username, Email, Password) VALUES ('$username','$email','$password')";
//
//if(mysqli_query($conn, $sql)){
//			echo "    <h3>data stored in a database successfully."
//				. " Please browse your localhost php my admin"
//				. " to view the updated data</h3>";
//		} else{
//			echo "ERROR: Hush! Sorry $sql. "
//				. mysqli_error($conn);
//		}
//
//		// Close connection
//		mysqli_close($conn);
//

?>